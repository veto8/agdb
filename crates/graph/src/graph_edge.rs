use crate::graph_data::GraphData;
use crate::graph_impl::GraphImpl;
use crate::graph_index::GraphIndex;

pub struct GraphEdge<'a, Data>
where
    Data: GraphData,
{
    #[allow(dead_code)]
    pub(crate) graph: &'a GraphImpl<Data>,
    pub(crate) index: GraphIndex,
}

impl<'a, Data> GraphEdge<'a, Data>
where
    Data: GraphData,
{
    pub fn index(&self) -> GraphIndex {
        self.index.clone()
    }
}
