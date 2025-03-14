const config = {
    "*": {
        display: "hidden",
        theme: {
            sidebar: false,
            toc: false,
            breadcrumb: false,
        },
    },
    index: {
        theme: {
            timestamp: false,
        },
    },
    "api-docs": {
        title: "API",
        type: "page",
        display: "normal",
        theme: {
            sidebar: true,
            toc: true,
            breadcrumb: true,
        },
    },
    docs: {
        title: "Docs",
        type: "page",
        display: "normal",
        theme: {
            sidebar: true,
            toc: true,
            breadcrumb: true,
        },
    },
    enterprise: {
        title: "Enterprise",
        type: "page",
        display: "normal",
        theme: {
            sidebar: true,
            toc: true,
            breadcrumb: true,
        },
    },
    blog: {
        title: "Blog",
        type: "page",
        display: "normal",
        theme: {
            sidebar: true,
            toc: true,
            breadcrumb: true,
        },
    },
};

export default config;
