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
(self.psmw59847=self.psmw59847||[]).push([[277],{22138:function(e,r,s){!function(e){"use strict";
//! moment.js locale configuration
var r="vasárnap hétfőn kedden szerdán csütörtökön pénteken szombaton".split(" ");function s(e,r,s,n){var a=e;switch(s){case"s":return n||r?"néhány másodperc":"néhány másodperce";case"ss":return a+(n||r)?" másodperc":" másodperce";case"m":return"egy"+(n||r?" perc":" perce");case"mm":return a+(n||r?" perc":" perce");case"h":return"egy"+(n||r?" óra":" órája");case"hh":return a+(n||r?" óra":" órája");case"d":return"egy"+(n||r?" nap":" napja");case"dd":return a+(n||r?" nap":" napja");case"M":return"egy"+(n||r?" hónap":" hónapja");case"MM":return a+(n||r?" hónap":" hónapja");case"y":return"egy"+(n||r?" év":" éve");case"yy":return a+(n||r?" év":" éve")}return""}function n(e){return(e?"":"[múlt] ")+"["+r[this.day()]+"] LT[-kor]"}e.defineLocale("hu",{months:"január_február_március_április_május_június_július_augusztus_szeptember_október_november_december".split("_"),monthsShort:"jan._feb._márc._ápr._máj._jún._júl._aug._szept._okt._nov._dec.".split("_"),monthsParseExact:!0,weekdays:"vasárnap_hétfő_kedd_szerda_csütörtök_péntek_szombat".split("_"),weekdaysShort:"vas_hét_kedd_sze_csüt_pén_szo".split("_"),weekdaysMin:"v_h_k_sze_cs_p_szo".split("_"),longDateFormat:{LT:"H:mm",LTS:"H:mm:ss",L:"YYYY.MM.DD.",LL:"YYYY. MMMM D.",LLL:"YYYY. MMMM D. H:mm",LLLL:"YYYY. MMMM D., dddd H:mm"},meridiemParse:/de|du/i,isPM:function(e){return"u"===e.charAt(1).toLowerCase()},meridiem:function(e,r,s){return e<12?!0===s?"de":"DE":!0===s?"du":"DU"},calendar:{sameDay:"[ma] LT[-kor]",nextDay:"[holnap] LT[-kor]",nextWeek:function(){return n.call(this,!0)},lastDay:"[tegnap] LT[-kor]",lastWeek:function(){return n.call(this,!1)},sameElse:"L"},relativeTime:{future:"%s múlva",past:"%s",s,ss:s,m:s,mm:s,h:s,hh:s,d:s,dd:s,M:s,MM:s,y:s,yy:s},dayOfMonthOrdinalParse:/\d{1,2}\./,ordinal:"%d.",week:{dow:1,doy:4}})}(s(30381))}}]);