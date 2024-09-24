"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[95894],{95894:function(t,r,e){e.r(r),e.d(r,{AssetFormats:function(){return S},getTranslationKeys:function(){return g}});var n=e(52322),i=e(94916),a=e(91290),s=e(52850),o=e(42228),u=e(39942),m=e(10242),c=e(59581),l=e(57700),f=e(57165),d=e(76825),v=e(88286),h=e(11456),x=e(2784),g=t=>{var{assetTypeLabel:r}=t;return{formats:"formats",formatsWithAssetType:["formats_with_asset_type",{ASSET_TYPE:r}],pixels:"pixels",dpi:"dpi",[m.yF]:"common:resolutions_4k",[m.HD]:"common:resolutions_hd",[m.SD]:"common:resolutions_sd",[m.qY]:"common:resolutions_web",[m.Zh]:"common:resolutions_web",[m.T0]:"common:resolutions_web"}},p=t=>{var{size:r}=t,{classes:e}=(0,o.e)({layout:"column"});return(0,n.jsx)("li",{children:(0,n.jsx)(i.Z,{variant:"body2",className:e.listItem,children:r||(0,n.jsx)(a.Z,{variant:"text",width:l.G})})})},y={formattedSizes:[]},S=t=>{var{asset:r,templateFormats:e=y,assetTypeLabel:i="",limit:a,selectedAssetSize:m,AssetFormatComponent:l}=t,S=(0,d.Tp)(r),D=(0,d.PD)(r),{ready:b,labels:F}=(0,h.D)({namespace:s.sm6,translationKeys:g({assetTypeLabel:i})}),{classes:z}=(0,o.s)({layout:"column"}),_=(0,v.Ch)(),{formattedSizes:w}=e.formattedSizes.length>=1?e:_({asset:r,labels:F,limit:a||D&&1,selectedAssetSize:m}),N=[c.k4,c.pX,c.bz].includes(S)?F.formatsWithAssetType:F.formats,{isGoodBot:C}=(0,f.N)(),[I,B]=(0,x.useState)(()=>!!e.formattedSizes.length||C);return((0,x.useEffect)(()=>{I||B(!0)},[I]),l)?(0,n.jsx)(l,{formattedSizes:I?w:void 0}):(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(u.I,{ready:b,title:N}),(0,n.jsx)("ul",{className:z.list,children:w.map(t=>(0,n.jsx)(p,{size:I?t:void 0},t))})]})}},88286:function(t,r,e){e.d(r,{Ch:function(){return j},It:function(){return C},RO:function(){return E},Rc:function(){return F},Ux:function(){return x},kn:function(){return I},oE:function(){return g}});var n=e(57460),i=e(6692),a=e(30053),s=e(59581),o=e(52802),u=e(84234),m=e(23534),c=e(79041),l=e(76825),f=e(21763),d=e(2784),v=function(){var t,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return null===(t=r.toString().match(/[0-9.,]+/))||void 0===t?void 0:t[0]},h={[o.xn]:{suffix:"px",widthKey:"width",heightKey:"height"},[o.tS]:{suffix:"in",widthKey:"widthIn",heightKey:"heightIn"},[o.IC]:{suffix:"cm",widthKey:"widthCm",heightKey:"heightCm"}},x=t=>{var{fullLocale:r}=(0,m.PE)();return new Intl.NumberFormat(r,t).format},g=t=>{var{unit:r,maximumFractionDigits:e}=t,[n,i]=(0,d.useState)(""),{fullLocale:a}=(0,m.PE)(),s=(0,d.useMemo)(()=>{try{return new Intl.NumberFormat(a,{style:"unit",unit:r,maximumFractionDigits:e})}catch(t){return i(t),{format:t=>t}}},[a,e,r]);return(0,d.useMemo)(()=>({format:s.format,error:n}),[s.format,n])},p=t=>{var{humanReadableSize:r,size:e,name:n}=t;return r||"".concat(e.toFixed(1)," ").concat(n)},y=t=>{var{formatter:r,humanReadableSize:e,size:n,name:i}=t,{error:a,format:s}=r;return a?p({humanReadableSize:e,size:n,name:i}):s(n)},S=t=>{var{bytes:r,gbFormatter:e,mbFormatter:n,kbFormatter:i,humanReadableSize:a}=t,s=r/1e3,o=s/1e3,u=o/1e3;return u>=1?y({formatter:e,humanReadableSize:a,size:u,name:"GB"}):o>=1?y({formatter:n,humanReadableSize:a,size:o,name:"MB"}):y({formatter:i,humanReadableSize:a,size:s,name:"KB"})},D=(t,r,e)=>{var{suffix:n,widthKey:i,heightKey:a}=h[t]||{},s=e[t],[o,u]=[r[i],r[a]].map(t=>t&&Number(v(t))),m=!Number.isNaN(o)&&o>0,c=!Number.isNaN(u)&&u>0;return m||c?{formattedWidth:m?y({formatter:s,size:o,name:n}):"",formattedHeight:c?y({formatter:s,size:u,name:n}):""}:{}},b=t=>{var{assetSize:r,kbFormatter:e,mbFormatter:n,gbFormatter:i}=t,{sizeInBytes:a,humanReadableSize:s,fileSize:o}=r;return a||o||s?S({bytes:a||1e3*o,gbFormatter:i,mbFormatter:n,kbFormatter:e,humanReadableSize:s}):""},F=t=>{var{assetSize:r}=t;return b({assetSize:r,kbFormatter:g({unit:u.KB,maximumFractionDigits:0}),mbFormatter:g({unit:u.MB,maximumFractionDigits:1}),gbFormatter:g({unit:u.GB,maximumFractionDigits:1})})},z=t=>{var{formattedWidth:r,formattedHeight:e}=t;return"".concat(v(r)," \xd7 ").concat(e)},_=t=>{var{assetSize:r,displayUnits:e,inchFormatter:n,centimeterFormatter:i,labels:a={}}=t,{formattedWidth:s,formattedHeight:u}=D(e,r,{[o.tS]:n,[o.IC]:i,[o.xn]:{format:t=>a.pixels?"".concat(t," ").concat(a.pixels):"".concat(t," ").concat(h[o.xn].suffix)}});return s||u?z({formattedWidth:s,formattedHeight:u}):""},w=t=>_(t)||_((0,i._)((0,n._)({},t),{displayUnits:o.xn})),N=t=>{var{displayUnits:r,assetSize:e,inchFormatter:n,centimeterFormatter:i,labels:a}=t;return r===o.xn?w({assetSize:e,displayUnits:o.tS,inchFormatter:n,centimeterFormatter:i,labels:a}):w({assetSize:e,displayUnits:r,inchFormatter:n,centimeterFormatter:i,labels:a})},C=t=>{var{isImageAsset:r,assetSize:e,labels:n}=t,i=(0,f.n)(),a=g({unit:u.P,maximumFractionDigits:0}),s=g({unit:u.X,maximumFractionDigits:0}),m=w({assetSize:e,displayUnits:o.xn,inchFormatter:a,centimeterFormatter:s,labels:n}),c={[o.xn]:m};return r&&(c.formattedDimensions=N({assetSize:e,labels:n,displayUnits:i,inchFormatter:a,centimeterFormatter:s})),c},I=()=>{var t=(0,f.n)(),r=g({unit:u.KB,maximumFractionDigits:0}),e=g({unit:u.MB,maximumFractionDigits:1}),n=g({unit:u.GB,maximumFractionDigits:1}),i=g({unit:u.P,maximumFractionDigits:0}),a=g({unit:u.X,maximumFractionDigits:0});return(0,d.useCallback)(s=>{var{assetSize:o}=s,u=b({assetSize:o,kbFormatter:r,mbFormatter:e,gbFormatter:n}),m=w({assetSize:o,displayUnits:t,inchFormatter:i,centimeterFormatter:a});return u?{resolutionDetails:m,size:u}:{resolutionDetails:m}},[a,t,i,n,e,r])},B=t=>{var{assetSize:r,centimeterFormatter:e,displayUnits:n,inchFormatter:i,isImageAsset:a,labels:u,isVideoAsset:m,isDesignAsset:c}=t,{format:l,dpi:f,name:d,resolution:v}=r,h=(null==l?void 0:l.toUpperCase())||"";if(d===s.gf)return h;var x=w({assetSize:r,PIXELS:o.xn,inchFormatter:i,centimeterFormatter:e,labels:u});return[...new Set((a||c)&&f?[x,N({assetSize:r,labels:u,displayUnits:n,inchFormatter:i,centimeterFormatter:e}),"".concat(u.dpi," ").concat(f),h]:m?[u[null==v?void 0:v.toLowerCase()]||"",x,h]:[x,h])].filter(t=>!!t).join(" • ")},E=t=>{var{sizes:r=[]}=t;return r.filter(t=>t.format!==a.LX)},K=t=>{var{limit:r=0,sortedSizes:e}=t;return r>0?null==e?void 0:e.slice(0,r):e},j=()=>{var t=(0,f.n)(),r=g({unit:u.P,maximumFractionDigits:1}),e=g({unit:u.X,maximumFractionDigits:1});return(0,d.useCallback)(n=>{var{asset:i,labels:a,limit:s=0,selectedAssetSize:o=null}=n,u=(0,l.aT)(i),m=(0,l.Am)(i),f=(0,l.ML)(i),d=u||f?E({sizes:Object.values(i.sizes||{})}):i.sizes,v=K({limit:s,sortedSizes:u||f?(0,c.hQ)(Object.values(d)):(0,c.Z)({sizes:d})}),h=o?[o]:v;return{formattedSizes:null==h?void 0:h.map(n=>B({assetSize:n,centimeterFormatter:e,displayUnits:t,inchFormatter:r,isImageAsset:u,isDesignAsset:f,isVideoAsset:m,labels:a}))}},[t,e,r])}},21763:function(t,r,e){e.d(r,{b:function(){return h},n:function(){return x}});var n=e(57460),i=e(32212),a=e(956),s=e(52802),o=e(67449),u=e(20410),m=e(26481),c=e(15306),l=e(75615),f=e(3255),d=e(53076),v={[a.BRANDS.SSTK]:o.mh,[a.BRANDS.ENTERPRISE]:o.mC},h=function(){var{queryParams:t}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},r=(0,d.B)(),{brand:e}=(0,m.D)(),a=(0,n._)({site_name:v[e]},t);return(0,f.ZP)(r&&(0,i.nI)({queryParams:a}).formattedUrl,t=>c.uS.get(t).then(t=>(0,l.O)(t.data)),{dedupingInterval:u.yR})},x=()=>{var{data:t}=h();return(null==t?void 0:t.displayUnits)||s.xn}}}]);
//# sourceMappingURL=95894.8b7b85ca8ab0eacb.js.map