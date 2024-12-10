use super::DbPool;
use super::ServerDb;
use crate::action::Action;
use crate::action::ClusterResponse;
use crate::server_db::ServerUser;
use crate::server_error::ServerResult;
use agdb::UserValue;
use serde::Deserialize;
use serde::Serialize;

#[derive(Clone, Serialize, Deserialize, UserValue)]
pub(crate) struct UserAdd {
    pub(crate) user: String,
    pub(crate) password: Vec<u8>,
    pub(crate) salt: Vec<u8>,
}

impl Action for UserAdd {
    async fn exec(self, db: &mut ServerDb, _db_pool: &mut DbPool) -> ServerResult<ClusterResponse> {
        db.insert_user(ServerUser {
            db_id: None,
            username: self.user,
            password: self.password,
            salt: self.salt,
            token: String::new(),
        })
        .await?;

        Ok(ClusterResponse::None)
    }
}
