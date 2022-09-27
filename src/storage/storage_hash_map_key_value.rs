use super::serialize::Serialize;
use super::storage_hash_map_meta_value::MetaValue;
use crate::DbError;

#[derive(Clone, Debug, Default, PartialEq)]
pub(super) struct StorageHashMapKeyValue<K, T>
where
    K: Clone + Default + Serialize,
    T: Clone + Default + Serialize,
{
    pub(super) key: K,
    pub(super) value: T,
    pub(super) meta_value: MetaValue,
}

impl<K, T> StorageHashMapKeyValue<K, T>
where
    K: Clone + Default + Serialize,
    T: Clone + Default + Serialize,
{
    pub(crate) fn meta_value_offset() -> u64 {
        K::serialized_size() + T::serialized_size()
    }
}

impl<K, T> Serialize for StorageHashMapKeyValue<K, T>
where
    K: Clone + Default + Serialize,
    T: Clone + Default + Serialize,
{
    fn deserialize(bytes: &[u8]) -> Result<Self, DbError> {
        Ok(Self {
            key: K::deserialize(&bytes[0..])?,
            value: T::deserialize(&bytes[(K::serialized_size() as usize)..])?,
            meta_value: MetaValue::deserialize(&bytes[(Self::meta_value_offset() as usize)..])?,
        })
    }

    fn serialize(&self) -> Vec<u8> {
        let mut data = Vec::<u8>::new();
        data.reserve(Self::serialized_size() as usize);
        data.extend(self.key.serialize());
        data.extend(self.value.serialize());
        data.extend(self.meta_value.serialize());

        data
    }

    fn serialized_size() -> u64 {
        Self::meta_value_offset() + MetaValue::serialized_size()
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn derived_from_debug() {
        let key_value = StorageHashMapKeyValue::<i64, i64>::default();

        format!("{:?}", key_value);
    }

    #[test]
    fn derived_from_default() {
        let key_value = StorageHashMapKeyValue::<i64, i64>::default();

        assert_eq!(
            key_value,
            StorageHashMapKeyValue::<i64, i64> {
                key: 0,
                value: 0,
                meta_value: MetaValue::Empty
            }
        )
    }

    #[test]
    fn i64_i64() {
        let key_value = StorageHashMapKeyValue {
            key: 1_i64,
            value: 10_i64,
            meta_value: MetaValue::Valid,
        };
        let bytes = key_value.serialize();
        let other = StorageHashMapKeyValue::deserialize(&bytes);

        assert_eq!(other, Ok(key_value));
    }

    #[test]
    fn out_of_bounds() {
        let bytes = vec![0_u8; 16];

        assert_eq!(
            StorageHashMapKeyValue::<i64, i64>::deserialize(&bytes)
                .unwrap_err()
                .description,
            "value out of bounds"
        );
    }

    #[test]
    fn serialized_size() {
        assert_eq!(StorageHashMapKeyValue::<i64, i64>::serialized_size(), 17);
    }
}
