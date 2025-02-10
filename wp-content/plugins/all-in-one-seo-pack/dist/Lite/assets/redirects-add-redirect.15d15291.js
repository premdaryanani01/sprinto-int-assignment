import{c as _,C as g,l as a,b as n,v as c,o as d,x as y,t as R,a as C,k as w,Y as k}from"./js/runtime-dom.esm-bundler.5c3c7d72.js";import{l as A}from"./js/index.7c01c5f2.js";import{l as S}from"./js/index.1f3cb1fa.js";import{u as v,h as x,l as E,c as L}from"./js/index.a87126ce.js";/* empty css                */import{a as b}from"./js/addons.dc226733.js";import{C as H}from"./js/Index.f71e22d2.js";import{C as B}from"./js/Index.942d349d.js";import"./js/translations.d159963e.js";import{_ as T}from"./js/_plugin-vue_export-helper.eefbdd86.js";import{i as N}from"./js/isEmpty.5c0cbe77.js";import{_ as l,s as P}from"./js/default-i18n.20001971.js";import"./js/Caret.d9cc70ba.js";import"./js/helpers.53868b98.js";import"./js/upperFirst.2cd99bdd.js";import"./js/_stringToArray.f9ddb970.js";import"./js/toString.f0787db8.js";import"./js/constants.1ec71a84.js";import"./js/JsonValues.3fcfec97.js";import"./js/Url.e5c2ac01.js";import"./js/ProBadge.751e0b85.js";import"./js/External.c9d4f255.js";import"./js/escapeRegExp.9b141b1a.js";import"./js/Exclamation.22e53a8b.js";import"./js/Checkbox.6db0b9ed.js";import"./js/Checkmark.e40641dd.js";import"./js/Gear.bd4e1565.js";import"./js/Slide.39c07c03.js";import"./js/date.6089ddf7.js";import"./js/datetime.f197aeae.js";import"./js/DatePicker.cad24eb3.js";import"./js/Calendar.b69b61c4.js";import"./js/pick.67675203.js";import"./js/_baseSet.9f9da1bd.js";import"./js/_getTag.1e50d0c4.js";import"./js/debounce.f7a8b998.js";import"./js/toNumber.90507ad4.js";import"./js/_baseTrim.11b89ad9.js";import"./js/isEqual.96d3394c.js";import"./js/_baseIsEqual.aba7ca44.js";import"./js/Tooltip.73441134.js";import"./js/Plus.426117bd.js";const p="all-in-one-seo-pack",U={setup(){return{rootStore:v()}},components:{CoreModal:H,CoreAddRedirection:B},data(){return{addons:b,urls:[],display:!1,target:null,loading:!1,strings:{modalHeader:l("Add a Redirect",p),redirectAdded:P(l('%2$sYour redirect was added and you may edit it <a href="%1$s" target="_blank">here</a>.%3$s',p),this.rootStore.aioseo.urls.aio.redirects,"<strong>","</strong>")},watchClasses:["aioseo-redirects-slug-changed","aioseo-redirects-trashed-post"]}},computed:{classSelectors(){return"."+this.watchClasses.join(", .")}},methods:{reload(){var t,o;this.display=!1;const e=(o=(t=this.target)==null?void 0:t.parentElement)==null?void 0:o.parentElement;if(e&&(e.classList.contains("components-notice__content")||e.classList.contains("notice"))){e.innerHTML="<p>"+this.strings.redirectAdded+"</p>";return}this.target.outerHTML=this.strings.redirectAdded},loadRedirect(e){this.loading=!0,x.get(E.restUrl("redirects/manual-redirects/"+e)).then(t=>{this.urls=t.body.redirects,this.loading=!1}).catch(t=>console.error("Redirect modal failed to load the redirect data.",t))},preloadRedirect(){const e=document.querySelector(this.classSelectors);if(e){const t=this.getElementRedirectHash(e);if(!t)return;this.loadRedirect(t)}},watchClicks(){document.body.onclick=e=>{var o;if(!((o=e.target)!=null&&o.classList))return;let t=!1;this.watchClasses.forEach(i=>{e.target.classList.contains(i)&&(t=!0)}),t&&(e.preventDefault(),this.target=e.target,this.display=!0,N(this.urls)&&this.loadRedirect(this.getElementRedirectHash(this.target)))}},getElementRedirectHash(e){return new URLSearchParams(e.href).get("aioseo-manual-urls")}},async created(){this.preloadRedirect(),this.watchClicks(),window.aioseoBus.$on("wp-core-notice-created",()=>{this.$nextTick(()=>{this.preloadRedirect()})})}},V={key:0,class:"aioseo-redirects-add-redirect-standalone"},D={class:"bd"};function M(e,t,o,i,r,u){const h=c("core-add-redirection"),f=c("core-modal");return r.addons.isActive("aioseo-redirects")?(d(),_("div",V,[g(f,{show:r.display,classes:["aioseo-redirects"],onClose:t[0]||(t[0]=j=>r.display=!1),"allow-overflow":""},{headerTitle:a(()=>[y(R(r.strings.modalHeader),1)]),body:a(()=>[C("div",D,[r.loading?n("",!0):(d(),w(h,{key:0,urls:r.urls,target:r.urls[0].target?r.urls[0].target:"/",disableSource:!0,onAddedRedirect:u.reload},null,8,["urls","target","onAddedRedirect"]))])]),_:1},8,["show"])])):n("",!0)}const Y=T(U,[["render",M]]),m=document.createElement("div");m.id="aioseo-redirects-add-redirect-standalone";document.body.appendChild(m);let s=k({...Y,name:"Standalone/Redirects/AddRedirect"});s=A(s);s=S(s);L(s);s.mount("#aioseo-redirects-add-redirect-standalone");
