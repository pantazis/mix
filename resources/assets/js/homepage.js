var $ = require("jquery");
import { createPopper } from '@popperjs/core';
import {  Alert,Tooltip } from 'bootstrap';
import {change_menu,toggleMenu,change_container_size,menu_sub_cat } from './_partial/nav';



var menu_class_arr = ["no-menu","only_icons","full_menu"];
var container_size_arr = ["full_container", "normal_container"];


$(".b1 button").click(function(event){
    change_menu(menu_class_arr,event.target);
});

$(".b2 button").click(function(event){
    change_container_size(container_size_arr,event.target);
})

//fullMenuOnHover();
menu_sub_cat();
    toggleMenu();







