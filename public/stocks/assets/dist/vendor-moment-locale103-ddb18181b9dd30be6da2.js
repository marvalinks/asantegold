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
(self.psmw59847=self.psmw59847||[]).push([[6261],{64249:function(e,s,r){!function(e){"use strict";
//! moment.js locale configuration
var s="január_február_marec_apríl_máj_jún_júl_august_september_október_november_december".split("_"),r="jan_feb_mar_apr_máj_jún_júl_aug_sep_okt_nov_dec".split("_");function t(e){return e>1&&e<5}function n(e,s,r,n){var a=e+" ";switch(r){case"s":return s||n?"pár sekúnd":"pár sekundami";case"ss":return s||n?a+(t(e)?"sekundy":"sekúnd"):a+"sekundami";case"m":return s?"minúta":n?"minútu":"minútou";case"mm":return s||n?a+(t(e)?"minúty":"minút"):a+"minútami";case"h":return s?"hodina":n?"hodinu":"hodinou";case"hh":return s||n?a+(t(e)?"hodiny":"hodín"):a+"hodinami";case"d":return s||n?"deň":"dňom";case"dd":return s||n?a+(t(e)?"dni":"dní"):a+"dňami";case"M":return s||n?"mesiac":"mesiacom";case"MM":return s||n?a+(t(e)?"mesiace":"mesiacov"):a+"mesiacmi";case"y":return s||n?"rok":"rokom";case"yy":return s||n?a+(t(e)?"roky":"rokov"):a+"rokmi"}}e.defineLocale("sk",{months:s,monthsShort:r,weekdays:"nedeľa_pondelok_utorok_streda_štvrtok_piatok_sobota".split("_"),weekdaysShort:"ne_po_ut_st_št_pi_so".split("_"),weekdaysMin:"ne_po_ut_st_št_pi_so".split("_"),longDateFormat:{LT:"H:mm",LTS:"H:mm:ss",L:"DD.MM.YYYY",LL:"D. MMMM YYYY",LLL:"D. MMMM YYYY H:mm",LLLL:"dddd D. MMMM YYYY H:mm"},calendar:{sameDay:"[dnes o] LT",nextDay:"[zajtra o] LT",nextWeek:function(){switch(this.day()){case 0:return"[v nedeľu o] LT";case 1:case 2:return"[v] dddd [o] LT";case 3:return"[v stredu o] LT";case 4:return"[vo štvrtok o] LT";case 5:return"[v piatok o] LT";case 6:return"[v sobotu o] LT"}},lastDay:"[včera o] LT",lastWeek:function(){switch(this.day()){case 0:return"[minulú nedeľu o] LT";case 1:case 2:case 4:case 5:return"[minulý] dddd [o] LT";case 3:return"[minulú stredu o] LT";case 6:return"[minulú sobotu o] LT"}},sameElse:"L"},relativeTime:{future:"za %s",past:"pred %s",s:n,ss:n,m:n,mm:n,h:n,hh:n,d:n,dd:n,M:n,MM:n,y:n,yy:n},dayOfMonthOrdinalParse:/\d{1,2}\./,ordinal:"%d.",week:{dow:1,doy:4}})}(r(30381))}}]);