import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import MyList from "@/views/MyList";
import MyEdit from "@/views/MyEdit";
import Home from "@/views/Home";
import Register from "@/views/Register";
import Search from "@/views/Search";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/MyList",
    name: "MyList",
    component: MyList,
  },
  {
    path: "/MyEdit/:parametro",
    name: "MyEdit",
    component: MyEdit,
  },
  {
    path: "/Register",
    name: "Register",
    component: Register,
  },
  {
    path: "/Search",
    name: "Search",
    component: Search,
  },
];

const router = new VueRouter({ routes, mode: "history" });

export default router;
