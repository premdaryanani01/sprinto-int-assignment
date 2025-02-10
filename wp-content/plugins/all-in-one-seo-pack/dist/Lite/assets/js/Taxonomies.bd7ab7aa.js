import{b as D,u as P,j as B}from"./index.66ecdd60.js";import{u as O}from"./PostTypes.dafa8837.js";import{A as j,T as L}from"./TitleDescription.d8d2a4f3.js";import{C as q}from"./Card.a31a0c5f.js";import{C as w}from"./Tabs.31818911.js";import{C as E}from"./Tooltip.73441134.js";import{a as F}from"./index.d0745c42.js";import"./translations.d159963e.js";import{c as p,F as h,J as b,v as m,o as a,k as S,l as i,a as o,G as I,x as u,t as r,C as _,q as N,T as R}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{_ as V}from"./_plugin-vue_export-helper.eefbdd86.js";import{_ as e,s as T}from"./default-i18n.20001971.js";import"./helpers.53868b98.js";import"./constants.a8a14dc3.js";import"./JsonValues.3fcfec97.js";import"./RadioToggle.333e7750.js";import"./RobotsMeta.12cd00ab.js";import"./Checkbox.6db0b9ed.js";import"./Checkmark.e40641dd.js";import"./Row.df38a5f6.js";import"./SettingsRow.9f92e269.js";import"./Editor.2ca7f2e1.js";import"./isEqual.96d3394c.js";import"./_baseIsEqual.aba7ca44.js";import"./_getTag.1e50d0c4.js";import"./_baseClone.369b15e9.js";import"./_arrayEach.6af5abac.js";import"./Caret.a21d4ca8.js";import"./helpers.7350cd15.js";import"./metabox.ee51de75.js";import"./cleanForSlug.97664b33.js";import"./toString.f0787db8.js";import"./_baseTrim.11b89ad9.js";import"./_stringToArray.f9ddb970.js";import"./_baseSet.9f9da1bd.js";import"./regex.8a6101c0.js";import"./GoogleSearchPreview.921a7163.js";import"./Url.24529655.js";import"./HtmlTagsEditor.736c95a6.js";import"./UnfilteredHtml.c28a5349.js";import"./Slide.39c07c03.js";import"./vue-router.2f910c93.js";import"./ProBadge.751e0b85.js";import"./Information.13e8cece.js";const s="all-in-one-seo-pack",z={setup(){const{getPostIconClass:n}=O();return{getPostIconClass:n,optionsStore:D(),rootStore:P(),settingsStore:B()}},components:{Advanced:j,CoreCard:q,CoreMainTabs:w,CoreTooltip:E,SvgCircleQuestionMark:F,TitleDescription:L},data(){return{internalDebounce:null,strings:{label:e("Label:",s),name:e("Slug:",s),postTypes:e("Post Types:",s),ctaButtonText:e("Unlock Custom Taxonomies",s),ctaDescription:T(e("%1$s %2$s lets you set the SEO title and description for custom taxonomies. You can also control all of the robots meta and other options just like the default category and tags taxonomies.",s),"AIOSEO","Pro"),ctaHeader:T(e("Custom Taxonomy Support is a %1$s Feature",s),"PRO")},tabs:[{slug:"title-description",name:e("Title & Description",s),access:"aioseo_search_appearance_settings",pro:!1},{slug:"advanced",name:e("Advanced",s),access:"aioseo_search_appearance_settings",pro:!1}]}},computed:{taxonomies(){return this.rootStore.aioseo.postData.taxonomies.filter(n=>this.rootStore.aioseo.data.isWooCommerceActive?!n.name.startsWith("pa_"):!0)}},methods:{processChangeTab(n,g){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${n}SA`,value:g}),setTimeout(()=>{this.internalDebounce=!1},50))}}},M={class:"aioseo-search-appearance-taxonomies"},U={class:"aioseo-description"},W=o("br",null,null,-1),G=o("br",null,null,-1),H=o("br",null,null,-1);function J(n,g,Q,c,l,f){const C=m("svg-circle-question-mark"),v=m("core-tooltip"),A=m("core-main-tabs"),k=m("core-card");return a(),p("div",M,[(a(!0),p(h,null,b(f.taxonomies,(t,x)=>(a(),S(k,{key:x,slug:`${t.name}SA`},{header:i(()=>[o("div",{class:I(["icon dashicons",c.getPostIconClass(t.icon)])},null,2),u(" "+r(t.label)+" ",1),_(v,{"z-index":"99999"},{tooltip:i(()=>[o("div",U,[u(r(l.strings.label)+" ",1),o("strong",null,r(t.label),1),W,u(" "+r(l.strings.name)+" ",1),o("strong",null,r(t.name),1),G,u(" "+r(l.strings.postTypes),1),H,o("ul",null,[(a(!0),p(h,null,b(t.postTypes,(d,y)=>(a(),p("li",{key:y},[o("strong",null,r(d),1)]))),128))])])]),default:i(()=>[_(C)]),_:2},1024)]),tabs:i(()=>[_(A,{tabs:l.tabs,showSaveButton:!1,active:c.settingsStore.settings.internalTabs[`${t.name}SA`],internal:"",onChanged:d=>f.processChangeTab(t.name,d)},null,8,["tabs","active","onChanged"])]),default:i(()=>[_(R,{name:"route-fade",mode:"out-in"},{default:i(()=>[(a(),S(N(c.settingsStore.settings.internalTabs[`${t.name}SA`]),{object:t,separator:c.optionsStore.options.searchAppearance.global.separator,options:c.optionsStore.dynamicOptions.searchAppearance.taxonomies[t.name],type:"taxonomies","show-bulk":!1},null,8,["object","separator","options"]))]),_:2},1024)]),_:2},1032,["slug"]))),128))])}const Nt=V(z,[["render",J]]);export{Nt as default};
