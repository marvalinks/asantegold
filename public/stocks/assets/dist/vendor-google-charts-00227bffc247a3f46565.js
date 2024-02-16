/*!
 * 
 * Premium Stock Market Widgets
 * -----------------------------
 * Version 4.4.0, built on Friday, November 17, 2023
 * Copyright (c) Financial apps and plugins <info@financialplugins.com>. All rights reserved
 * Demo: https://stockmarketwidgets.financialplugins.com/
 * Purchase (WordPress version): https://1.envato.market/az97R
 * Purchase (PHP version): https://1.envato.market/AQ17o
 * Like: https://www.facebook.com/financialplugins/
 *
 */
"use strict";(self.psmw59847=self.psmw59847||[]).push([[2626],{35073:(t,s,e)=>{e.d(s,{E:()=>o});const a=Symbol("loadScript"),c=Symbol("instance");let r;class i{get[c](){return r}set[c](t){r=t}constructor(){if(this[c])return this[c];this[c]=this}reset(){r=null}[a](){return this.scriptPromise||(this.scriptPromise=new Promise((t=>{const s=document.getElementsByTagName("body")[0],e=document.createElement("script");e.type="text/javascript",e.onload=function(){o.api=window.google,o.api.charts.load("current",{packages:["corechart","table"]}),o.api.charts.setOnLoadCallback((()=>{t()}))},e.src="https://www.gstatic.com/charts/loader.js",s.appendChild(e)}))),this.scriptPromise}load(t,s){return this[a]().then((()=>{if(s){let e={};e=s instanceof Object?s:Array.isArray(s)?{packages:s}:{packages:[s]},this.api.charts.load("current",e),this.api.charts.setOnLoadCallback(t)}else{if("function"!=typeof t)throw"callback must be a function";t()}}))}}const o=new i}}]);