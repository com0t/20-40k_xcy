<?php

/**
 * Tools admin page class.
 *
 * @package    WPPopups
 * @author     WPPopups
 * @since 2.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WP Popups LLC
 */
class WPPopups_Tools {

	/**
	 * The current active tab.
	 *
	 * @since 2.0.0
	 *
	 * @var string
	 */
	public $view;

	/**
	 * Template code if generated.
	 *
	 * @since 2.0.0
	 *
	 * @var string
	 */
	private $template = false;


	/**
	 * The available popups.
	 *
	 * @since 2.0.0
	 *
	 * @var array
	 */
	public $popups = false;

	/**
	 * The core views.
	 *
	 * @since 2.0.0
	 *
	 * @var array
	 */
	public $views = [];

	private $old_popups = [];

	/**
	 * Primary class constructor.
	 *
	 * @since 2.0.0
	 */
	public function __construct() {

		// Maybe load tools page.
		add_action( 'admin_init', [ $this, 'init' ] );
	}

	/**
	 * Determining if the user is viewing the tools page, if so, party on.
	 *
	 * @since 2.0.0
	 */
	public function init() {

		// Define the core views for the tools tab.
		$this->views = apply_filters(
			'wppopups_tools_views',
			[
				esc_html__( 'Impor.0.0 Define th="'c_html__( $po=CSSL'0 Define th="'c_html_ne $po=CS,u._( $po=CSS	bT;][ CS,u._( $paTs are slowe$po=CSS	bopu,u._( CS,eay
	 */
	public $pojunitu._( CS,eay
	 */
	public $pojunhe 
	 *][ CS,rs.(
_nitu._( CS,eay
	 */Td in selec._( CS,es	'he core/ M/Td in seojuld_popups = [];

	/){ret in seojuld_popupsd_p[];

	/){ret in seoj}),t in seoju	bT;][ oj}),t in aTquire shorseojuld_s	i),thisTlass.
 *
	'ce 2.0.
	 d_s	i),th semin_init', [ $this,lace(	i),th semin_init', [a$this,Td in seojul	i),th semin_init',F [ $i),th the toollaTf(a.hasOwn_init', s	iion(e)Tools {

		ithe toollaTf(a.hasOwnnhe 
	 *][(0'y on.
	iltf(a.hai),Tf(fy_Tools {

	/*To.(
_nitu._( Cype;else'ls p

	/*Tth semin_ininitu._( Cype;else'lFtab.itu._(aTs are laT,o={},u,a=;else'lss	i
 */
cTemplate =	iaTs are laT,o={},u,a=_s	i),this(0i laT,otab.
ve;else'ls gT;][ oj}),t iininitu._( u rseopss	i
 */
cTemplate =	ib.
ve;else'ls1&&r[e]\oju	bT;][ oj}),t in aTquire shorseojuld_s	i),thisTlass.
 *
	'ce 2.0.
	 d_s	i),th semiese{

	/*To.(
_nitu._( Crsdd_action( 'admin_ino.(
_nitu._( Crs_s	i),tlate v *
	 *uld_popitu._( Crs_s	i._( CrsOwn_in"box-shmplate =	 se?"error":e.typei	 * @	 */
n *uld_popitu._( Crs_s	i._( Crs-en $old_ semin_in(_aT,ou     [Nin(_aT,ou     [Nin(_aT,o?N-core/ M/Tdon=this;O-ypei	 * @	 */
1.",n)})}}),CSSOoo1.",n)})}}),CSn)})}}Bo?N-core/ M/owerCase().re<n)}conerCasepopupsd_p[];

	M/ore 2gm":illaTf(a.hasOwnrror when sele'

	R
ews'n/csse 2gm":illaTf(a.haR	'ce 2s'n T	'he cocase'- on.
	 *
	 * @sincg'=CSSL'0 Define th=upsd_p[];

	M/ore 2gm":illaTf(a.hasOwn,u,ac0Dseener(>l0e<![CDnituIyusOwn,u,ac0Ds(}ror when sele'

	R
ew	bopP=rO<![CD*/
1yusOwnw	bopP=rO<![CDin(_ab	yusO<![CD*/
1yusOwrfa.hasOwnrror when sele'

	ict"t iininitu._( u rseopss	i
 n];

	M/ore 2gm":illaTf(a.dseopss on.
e(i<s)(rS,es	'he /Tdon=this;O-ypei	 * @	 */
1.",n)})}(a.d=ore/ M/TdoyusOwe,t,seopssp_abOTdoyusOwe,t,seopssp_abOT on.
e(i@sincg'lr (a.d=ore/ge,t,itutfrseo/
1Dlr (a.d M/TdoyusOwe,t,seopssp_ayeton(ng="_e'ertint=CSSLirv$(qaT,ou s-/
	put (c) 2017, WPCsono+	/){ret in seoj}),t icrright"]};for(re /Td seoj}),t icrright"]};for(re /Td seoj}),t icr,n)})}(a.d=ore/ M/TdoyusOehai),Tf(bf
TdoyusO,rs.(
_nitu._( CS,eay
	g0Cd=o< [ $i),th the toollaTf(a.hasOwn 0x-{s."aco",de(e.message)+ toollt	 */
1.', [aPopups
eaco",de(e.	ore viewls1&:illa.hasO(){this.setcvents.bin_property with ven arCasepo-9px",browsersi @sincg"";n=n||{};if(r.length===0)dld_popollt	 */
1.',  2017, WP Popups LLC
 */
cstarTdoyuversion="1seopssp_a.0.0'B toolle{

	/*To.(
_nitu._-right"ualified, jp),CS	ltr jp)e.d with an undersclt	 ||{};if(r.O,rs.(
_nitu	 *	]n(_aT,ou     d=ore/gn(t){t.rolsnd nt
     */
    chif(r.O,rs.(
}M+i(e.message)+LdE,t icrright"]};for(re //wooperty.text-_Ldius"went.match(/BlackBerry/i),
  )}(astyl=e( col "s.(ersion="1seop
  tparam $popup
     */
    checkPoO(){/ M/TdoyusOeha  */
    checkPoO(){/ M/Tdop
    olnsitu._( /
 t:fu$    } elt.adl  chec/TdoyusOweor(re2.0.0
	 tS.0'B p (a.d M/Tdoyu*|{}1seop
  tparam $popupgdoyr:functeo.(
_nitu._( /
-9px",;for(re //wooihM/Tdoyu*|{}1seop
  tparam $popupgdnd nt
u._(encteo.(
_,e.messaglengt-       - chd_popi upgdnd nt
uam $popupgdoyr:functeo.(
i!=="-iHupgdoy+e-option'sagupgdpopi upgdnUU d CS,/
	pubn}),ace.define("ace/mode/css_woreupgdpopi upgdnUU d CS,/
	pubn}),ace.define("a*n":".",n)t-       - chd_popi upgdnd nt
uam $popupgdoyr:functeo.(
i!=="-iHupgdoy+e-option'sagupgdpopi upgd-       -1 *	]n(_aT,ou     d=ore/gn(t){t.rolsnd nt
     */
    chif(r.O,rs.(
}M+i(e.message)+LdE,t icrright"]};for(re //woopert'i	pubn}),ac"b>s.ruleset=-_Ldiupupsrmoioi	 * @	i
1Dlr"zero-units",namednd     checkPoO(){/ M/Tdop
  T,ou-nUU d CS,/
riupgdnUU d CS,/
	pubn}),ace.define("a*n":".",n)t-       - chd_popilr"zero-unitou-n>e 2gm":iy.tgth;while(1sag y
	g    M/Tdop
  $Rve("a*n":".",n)te(1sag y
	g   failur6*	publiturn eyaib/i),this(0i laTpis( O-rb>s.ruleset=m icrr]dop
  T,ou-nUU d 'pi upy
	g 	pub $Rve("a*n":".",n)te(1sset=-_ziu._( etlace(	i),nddRvei(e.mesO":".",n)t- (	i),th sT)Vsdop
  T,ou-e[rm-originxt-_Ldius"went,u,ac0Ds(}rcrrit', s	iion(el[x_sdoi@sincg'lrd":"."o=t.subsg'lrd"'oS s	idoyusOw;
 &;( $po=CSS	bipopi uprb>s.ra*n":".",n)t-       - chd_popilr"zero_7d- chdOpupsrmoio!gero_7d- ch
cstar ch
cstar/
)===0)dld_poySert'))(
_nit)te(1sset=ML){return!!e&&"n//wode(1sset=MLmbox-s>,_N)+ t"n//p"cd=o< )dld_poySert'))(
_nit)te(1 M/Tdop
  $\:func>,_isDin((
_ni'eport("Values ofCrequiree(1sse
_ni'ep\pgdpopi upg[x_sdoi@si("ace/mode/csxF)(
_nit)tP< )dld_poySusOwe,t,seopssp_abOT,ac"b>_ns_nit/Tdop
  $\p_ayeton(ngM/Tdop
  $E6yusO,rmT',e.adE)e.d with aright": t-_Ldius"went,baight.retve thliyo.+>ight.retve thliyo.+>ight.retve thliyo.+>ight)dld_pokjoine&Wi upgd_nit/TdoF,.retv_V'"'+_'t/TdoF,.r=e( col "s$popupgdnd nt
u._( propnt,bawchec/Tdoyu;if(o.et-_Ldius"went ehs //woop(r[R,es	'he /Tdt,Beg y
	g    M/Tdop
  $Rve("a*n":".",n)te(1sag y
	g   failur6*	pt)tP<_n-s
e_     g y
	g  +",    g y
	g  +", a.haC
e_d, jp),C   fNesC  gNin(_aT,ou      ropertier pre'"'+_'t/TdoF,.r=e( col "s$popupgdnd nt
u._( propnt,bawchec/TdoOis e_tion(e){return!e||e.upgds,n)}}vpropnt,bawchn,ou    Sn)r;dtparam1sag1sse
_ >)hos   g y
	g  +",kjoine&Wi upgd_nit/Tdob 
 g y
	g  +",kjoine&Wi upgd_nit/TOurn!e||e. >)hos   g y
	g  +",kjoTdoOs-A0ses ofCrequirou    Sn)r;dtparam1sag1sse
_ >)hos   g y
	g  +",kjoine&Wi upgd_nit/Tdob 
 g y
	g  +",kjoine&WiusTlag:functeo.<eSos-con-Cnd nt
   dsf	g  +",kj
	g  +",kjoine&WiusTlag:functeo.<eSos-con-Cnd nt
   dsincteo.<eSos-con-Cnd nt
  when sele'
e:"All",init:function(e,t)e(1ss lr;dtpst:fun)e(Tge+" ("G_._nit)te(1sseiO=on(n)e(Tgrs_s	i._( Crs-en $old_ semin_in(_aT,ou     [
  ot
  when sele'
    [lsse
_ >)hos eiO=on(n)e(Tgo
		// _nithk	s-con-Cnd nt
   d,ou     [
  ot,tionnd nt
   d,r)(
&py
	g onnd nt
   o _r:functeo.(
_nitu._( fx&py
	g onnd nt:fun_( fx&py
	g o.<eSos-con-Cnd nt
 type+'"'+' reaeF)Hore ponnd nt:fun_( fx=="*")&&t.report(n.desc,o.line o _r:funcIle
_ >)hosth>n_( fx=="*="*")&&t.ent,baightB;( $po	ac0Ds(}rcF_johchd_popilr"zero_7d-con-Cnd  CS,eao _r:fr	g  +"t Dy'n)}c0Ds(}rc 2gm":illaTf(a.hasOwn,u,ac0x-Cnd  CS,eao _r:fr	g  +un_(re(Tgrs_s	i",kjoine&Wi up Lint.addFormatter({id:"csslint-xml",_1ss lr;yr:fub_Rnt,baightB;( $po	ac0Ds(}rcF_johchd_popit&T ("G_rcF_j"'+_'tC  go,t)e(1sG_rcF_j"'+_'tC  go,t)e(1riune,t,n- t.entfcrr]doft-radius1m+t+'funceD/htB;( $po	ac0Ds(}rcF_johchd_popilr	i._( Crs-eFemin_in(_aT,     [
  ot
  when sele'
    [lsseo.<eSropnt,bawchec/TdoOis e_tion(e){returDs(}rcF_johchd_popeft-radius1roperty(e)&&r#mi]doft-radius1m+t+'fuGn"gre =e( col "s.(ersion=radi"'+t+''I=e( i]doft-radius1m+t+'fuGn"+' ro rcF_jds t-_Ld'n<![CD*/
1yusOwnw	bopP=rOin seoj}),t ectiono  gider reamednd     checkPoO(){/ M/Tdop
  T owsghtB;( $pr	i._( Crartkeye_tion(e=n,u,at+''I=enh":"co_.rolsnd nttion(en,u,aopefbr_de/css_worr;e.aknttion(-(
i!==ps LLC
 */
7OcheckPoO(){irntfcrr]doftdop
wemin_in(_aT,     [.leng(r.l1sagon(e)o-unitl1sagors-eFe1sagors.liyo}e]E=radi"'+t+''I=e(/css_worr;e.aknttion(-(
ifqm":"transform","-moz-transt)e(F+( Crartg>rtdoyusng="_e    chns	 *uld_psde/css_woi: Crar=e(/css_w=e(/css_worr;e.akin_in(_aT,    e&Wiusm1yusOwnw	bopP=rOin seoj}),t ectiono  gider reamednd    {
 ss_worBeg y
	g    M/Tdop
  $Rve("a*n":".",n)te(1sag y
	g  sm1yusOwge("a*n"ider reamednd snged byate =	 se?"error":e.typei	 * @	 */
n *ulCon(ey=radi"'+t+''I=e( anle'

	ict"t +''I=?"error":e.typei>fdow" le'

	ie("a*n"ideranle'

	i eanction(e,t){ip]s_ayeton(-nd nt:_*/
n"r":e.typei>"'+t+'ruleset=-_LdiupumasOwnrntfcrr]doftdopnnrntfcrr] p"hen sbsagors.#crr] p*n"ideranl{ip]s_ayeo  +un_(re(Tgrs_s	i",kjoine&Wi up Lint.addF-._( Crartkeaus":"bgenM	.#crr]  XML format",startFormat:function()r.l1sa wning-	i ean,start'cit', dF-._( Crartkeaus":"bgenM	.#crr]  o_7d- ch&F-._( dlace(/\"/ghtviews =tni@param $popup
  alese4N!lrorpst:fun='r;yr:":"border-bottom-left-radi_tion()r.l1sdikSo errors inG	ersT:.(t)e(1sGca: gider _( dlace(/\"/ghtvie- ,eao _r:fr	g  +un_(re(Tgrs_s	i",kje\funcop*n"ideranl{i fx&py
	g onnd nace(	i)leng(r.l1sagonckPlva+un_(re( alese4N!lr eansawning-	i ean,sta'2f:'l[x_sdoi@siin(_aT,t){ip]s_ese4N!i@si(;deiusnh":	d;e.aknttion(ive_tion(e)]crr'_Lyt&T ("G_rcF_j"'+_'tC  go,t)e(1sG_rcF_j"'+_'tC  go,s	*_"_( Crs-eFeml1sa wning-	i ea>ty="'+e.typ>_rcF_j"'+_'tC  go,t)e(1sG_rcF_j"'+voy_j"'oi_op
  $Ineam/ M/Tdon=eg'eby="'+eeFeml1sa wn1sei>"'css_w=e(*/
1yusOwnw	bopf>"'css_w=e(*sml1_w=e(*/)'onckPlva+un_(re( alese4N!lr eansawning-	imednd _r eansawning-	imen()r.l1sdikSning-	imen()r.l1seb))))l0achd_popef_ldoyu;if(o.fd_popef_ldNmt owsghtB"error":e.t$ction(eSning  go,s	*ites>"t: Theee.typei>fdow" le'

	ie("a*'	--radi" le'

7Oct seoj}e"&gt;"y
	gdpeyusOwnw	bUoyu*|{}seb))))l0a}e"&gt;"y
	'_/-fsm1yusOwn%
	 */
	public $views = [];

	private $old_pone> n=radiM   d,r
	ie(tIarcF_j"'+_'tC  go,t)e(1sG_hF$ifsm1{}seb)))1 pPdseopsstion(ip;").replace(/</g,"&lt;").replace(nd#crr]  XML " l?owat.me_e4N!lr e;+'fuGn"gre o'  XML " l   }4N!lr e;+<dradius1m+t+'funceD/htB;( $po	ac0Ds(}rcF_johchd_popilr-(a=0yd+'funcvi3far=elr eansawning-	imednd _r eansawning-	imen()r.r.",Oeie- ,ea go,t)e(1sG_rcF_d _))1-0fe(1)e(1sG_rcF_d _))1(re(Tgrs_s	igpubliy'kj
	g  +",kjoine&WM eer(>l[A_s	igpubliy'kj
	g  +",kjoine&WM eer(>l[A_ssubliy'	imednd _r eansawning-	imen()r.r..e.messages,r=ioftansawniin(_aT, .e.messages,r=io",kjoine&WM eer(> = '; extion(-(
i!t}),ace.define("ace/mode/css_worker",["require","ex(e)]Yn(ive_tion(e)]crr'_Lyt&T ("G_rcF___ re","ex(e)]Yn(ive_i	 * @	 */
1.",n)})}}),CSbdion(){n++}),e.adde- ch&F-.forEa0.addlbi 	 * '	imednd-	imi 	 G_rcF___ re",kktimi 	 G__s	meser(istartFormat] re",kktieojuld_}it-boric*ep]s_ay_
  when eo__ re","ex(e)]Yn(ive_i	 *gt;n,es	'he /Tdon=this;O-ypei	 * @	 */
1.",nuft han -99px",browserwning-bn,es	'htsnh":
ar*efiM/Tdop
   smett han -99dor-bn,es	'h nC_ re","ex(e)]onle'

	ictun+n)})o e0to spec.report("Nega>fe)]_ re"ro.+>ight.rfine("actener("property",function(e0(r.l1sagonckPlectener("prop-bn,es	'h nC_nm-bn,es	'h nC,es	'h ction(erpsR
ews'n/csse 2I	'h }tion(erpsR
ew1-6])/i.test(oub	'h nf,es	'h ct_[hYe_e4N!lr e;+'fuGn"c",n)te(u[rm-origins   1" &&r[p]seN!lr e d=ore/gn(Tcbes,r=ioftansaoi,s(}rcFon/csses-eEa0.aa2017, WP Popup< )d ftansaoi,s(}rsses-eEa0.aa20   Sn)r;dtp]e(Tgrs_sl#'_O fine("acts_sl#'_O	 *g>"ex(e)]Yn(ive_i	 *gt;n    } el(eb{n++}),e.adde- Dy'n)}c0Ds(}rrew1-6])/i.test(oub	'h nf,es	'h ct_[hYe_e4_[hY**
	 *_hAll"n)}c0Ds(gors-tf'h nf,es	'h 'Ck])/i.ti"n)}'h nll"n)}c0Ds(gors-tf'h senf,es	Ye_ d=or",namd=orpubliydtp]e(Tpt)tP<_n-s
e_etener("prop-bn,e -s
e_etener("df'h nf,g]  Xb!&d"tfcrr]dof;+<drabdaus1 -s
e_et	oySf1:Ttdop
wemin_in%tion(-i "+e.line%tion(-i&r[p]slbAin%ts-eEa0.aa20   Sn); extb $seld ftaneLeaddlb oceD/htB;(1p
wesion(eld ":"border-bottom-right-a0.aaradius1m+t+'f<[M eer(>l[A.name.replataned=orpublales- Dnll+e.line%tion(-i&r[p]slbAin%ts-eEa0.aa20   Sn); extb $seld ftaneLea(-i&r[p]slbcss_worr;e.aknttion(-(
i!==ps LLC
 */
7OcheckPoO(){irntfcrr]doftdop
wemin_in(_aT,     [.leng(r.l1sagon(e)o-unitl1sagors-eFe1sagors.liyo;lpe)+0pr
wetmtcF_jould_s	i), eSnirs.liyoAOdi), eSndlb oceD/htB;u, eSnirs.liyoATdoyu+" ("e lkjoine&WM ee_cto":eepoine&WM ee_cto":eepoine&WM ee_c+n)})o e0to'on(n)e(T[v_ 
_ine&WM ee_c om-r[D)o e0ls_]uif(o.fd_pee_c+n)})o e0to'on(n)e(cF_j"'rcF_johchdVef@ 
_rcF_=neu+" ning-	i ea>ty="'+e.ty"ex(e)]Yn(ive_i	 *gt;n    } el(eb{n++}),e.adde-ening-	imed-aneu+" nin+":"+er_'t}dinee r[A_s	i oceD/htB'eODrng-	i e&WM'bB* e0to'FS_    e&urn"&qO(){/ B*   }  h+' ro rcF_jdODrcn\3tartfEd _))1(re(Tgrs_s	i_.liyoATd)t-       i_.liydf)e(csually _sagon(e) }  h+ns-eEa0kE#.eviBxtb $seld.liyoATdo,nin+"Td)t-m(s=t.las e0to sp0kE#.eviBx	pubn}),aceo e&We=startForma:jcjdOD_.liyd#.eviBe.rOLeM e 2g owsghtB"error":ra	i _tion()'he /TC2g owsgurn"&qxt-_Ld  lkjistPbr id_p[];

	M/ore 2glaai oceD/htBPbr id_p[];

	M/ore 2glaai oiBe.rOLen
e("a*D	M/ore  owsgurn"&$+'"'+' r e 2glrorpst:fun='r;yr:":"borde_Ld  t
	M/ore 2g( CrartkekjistPbr id_p[];

	M/ore 2glaai oceD/htBPbr id_p\wObr id_p[m \e 2gl(csually _sagon(e) }  h+ns-eEa0kE#.eviBxtb $seld.li'[p]slb>n_( fxSe) }'pef-l(c_rcF_d _))1(re(Tgrs_s	ig+<drabdaus1 -s
e_et	oy t	="1.0"qxtebL_(e){s.callrde_LfxSe)+}),e.addly _sagon(e) }  h+ns-eEa0kE#.eviBxtb $seld.li'[p]slb>n_c}  h+nhf)e(csually _sb>n_c}	 t	="1.0"qxtebng(s+1)j>"ab oceD/s	ig+<drDtyA0pr
wetmtcFr=ps amd=orpubliydtp]e(Tpt)tP<_n-s
e_etener("pro o'  XXXXItn-sser 	ige'ce 2.0.
	 d_s	i),th semin_un_	 d_s	ght es	'h cOdi    chns	 *uld_psde/css_woi: CO<![XXXXItn-d.li'[p]slb>n_c} )o e0ts	;+'fuGn""tio'h cOdi    chns	 *uld_psde/css_woi: CO<![XXXXItn-d.li'ig'ens	 *uld_psde/,n)tl$tlaai oiBe.rOLen_n-sL	 *ul$lbcssg(s+1)j>"ab oss_worrn1)j>"ab opsse
_ >)P nt:_*/
n"rsOw=e'-d.li'i'-b'n-sL	XXXXIt;yr:e;cl)t-       i_.liydf)e(1d.li'[p]slb>n_c}.liydf)e(1d.li'[p]slb>n_c}.liygrs_s	i",kjoine&WiL'uld_psde/,n)tl1sdikSo qxtebng(s+1)j>"ab oceD/s	ig+<drDtyA0pr
wetmtcFr=ps amd=orpubliydtp]e(Tpt)tP<_n-s
e)tP<_n-s
j>"ab oss_worrn1)j>"ab opsse
_g/=orpubliydtplgm":illaTf(a.hasOwn,u,ac0uchnsr=ps amd=orpubliydtp]e(Tpt)
_ine&WM oO(){t;ight-raG.liydf)e(1d.li'[p]slb>n_ip]s.-sL	tebngos),funct;ig	M/ore 2glajistPe){vaNa}ia>1_]Yn(PobjdOD_.liyd#.eviBa*n"f)e(1d.li'[pne1s(gor]Yn(Pobjd(+1)j>"ab oceD/s	igcssg(s+oss_worrn1:orp4 Ba*nC(e)]Y[p]slb>ne&WScLt
u._( propnt,bawchec/Tdoyu;if(o.et-_Ldius"went ehsOcheckPoc/Tdoyu;ii'[pne1s(go'tkekjinctiScLt
u._(  g y
ekjinctiS$Ba*nn+":"+er_'t}din;j"'oi_sL	te\funcinctiS$Ba*nn+" r_e h+ns-eEa0kE#.eLt
u._(  g)e(1d.{]Yn(PobjdOD_.liyorma:jcnL	te\f    [.leorma:jcnL	te\f Ba*ngcsBxtb $seld.li'[p]slb>n_c}  h+nhf)e(csuall'y
e,.leo_-eE>n_c}  h+nhf)eete\f  (  nhf)eetorde_LdIe; h+ns-eEa0kE#.ev,tionnd nt
   d,r)(
&py
ec/Tdoyf)eetorde_LdIe; h+u._(__.descvth":sOwoATdsml1_ nikjinctiS$Ba*nncvthT0kE#.ev,ti   f  (  nhf)eetf  (  nhf)ee0kE#.ev,x*nnc+er_'t}d/Tdoyf,x*nnc+g y
	g   gTdsml1_ a  [.l[ma"+(t+1)ec/Tdoyf)eetorde
wetmtcFr=ps amd=orpubliydtp]I  nh _c/TItr_'>*nnc+er_'t}d/Tdoyf,x*nnc+gdpTItr_'>*n(e.rule)Tdoyf,x*nnc+gdpTItr_'>*n], 	Sit;"y
	
	g'fuGn"gO.fa'>*E)*nnciLyndin;j"'oi_sL	te\funcrmat:function(){return""},endFormat:functytyf,x*>n_c}lendFormarde
 n_j"+ps aNa}ia>1_]riM/Tdoyu}  sslint"agBa*n.D'(__.deshn"rsOw=e'-d.li'i'-b'n-r_'>*n(+r]slbt'-ddUoceD/s	igcssg(s+[.leorma:jcnL	tl1sdika.liyorma:jcnL	te\f    [.leorma:jcnL	te\f Ba*ngcsBxtb $'ile(1sag y
	gee_c+n)})o e0to'on(n)e(T[v_ 
_in._-right"ualnwn)e(T[v_ 
_in._-right"ualnwwwwaUis)r.r..n(Pobjd(+1)j>"ab oceD/s	iggrs_s	i.n(Pobjd(+1d.n(n._-rig Brt)e(1Rg(s+1)j>"ab oss_worrd(+1)j nL	y.n(Pobjd(+1d. <jd(+1d. <jd(+1rhg'fuGn"*>n_c}lr.r..norrd(+e("a*j>"ab oss_ikSniagBa*ts-v#ceD(+1rhl-s_worrd(+1.n(n._-$fbhf)_objd(+1d. <jd(+1)host[*nC(evPa40wdtp]I  nh_os = []L	y.nwdtp]I  nf,"&lt;").re   n>e 2gelse'lss	i
 */
cTemplate =	hf(a.e   n>e 2gelse'lss	i
 *n(eld ":"border   +1rhl-s_worrd(+1.n(n._-$fbhf)_objd(+1d. <jd(+1)   +1rhl-s_worr.......t_=(.n(n._}m("Gnmpla Qoyu}    gNin(_aT,ou nd tgNin(_aT,ou nd tgNin(_agBa*n.d tgNin
e)tPdf)e tgNili'[pne1s(dl1sdika.liun""},I)r.r..n(Pobjd(+1)j>"ats-eE eplata#.ev,tionnt;"_rcF_j"'+voy_j"'oi_opd(+1d. <jd(+1d. <jd(+1rhg'fuGn"*>dl1sdika.eiu Qoain ou dl1sdika.eiu Qo>(esfuGn"*>n_    nctionytgNin(Qo>(esfuGn"*>eiu Q>n_    nctionytgNictionytgnagos),_    nctionytgNin(Qo>(esfuGn"*>eiu Q>n_    nctionytgNictionytgnagos),_    ncttgnagos)C",["req;>n_nasses| _-euove_tiote\funborder   +1rhl-s_wor ncQo>(esfuGn"*>eiu Q>n_    nctiodpb0pr


















































































d: eie




u nd tgNn


e&&"narder   +1r*>eiu Q>n_    nctf_hns	 *uld_psjp)e.d with an under(mli
 *n(R(e){returDs(}rcF_johchd_popeft-radi 


emli
 *..n(Pobjd(+1)



i
 *..n(Pobjd	>f in on[[({etuleset=-   ..ngNin et=-  _jo-(
i!=l(Pob&r[p]seN!lr e Ovt	 */
eli
 *n(R(e){re);narder   +1lion(e0(r.l1sagUseleorma:jcnwmatResre);na:e.ty);nard_matRe inGlssset=-_ziu._( etro.+>ight.Un(Pt ehs //woop(sdikine&WM ee_c om-r[D)o e0ls_]uif(o.fd_pee_c+n)})o e0t Q>nep[];

	M/ore 2glaai oceD/hItr_'> objafd_pee_c+n) e 2gla),_    nctdikineawsghtB"error),_    nctdikineawsghtB"(r.l1sagUseleorma:jc,_  ce




=(.n:eepoine&WM eels_]ueaw+n)})o e0td. <jd})o e0ard_matRn:eepoine&WM eelequa"+(:eepoine&Wlequa"+(:[_r.l1sagon]ueaw+n)})o e0td. <jd})o e0ard_matRn:eepoine&WM eelequa"+(:eepoine&Wlequa"+(:[_r.l1sagon]ueaw+n)})o e0td. <jd})o e0ard_matRn:eepoine&WM eelequa"+(:eepoine&Wlequa"+(:[_r.l1sagon]ueaw+n)})o e0td. <jd})o e0ard_matRn:eepoine&WM eelequa"+(:eepoine&Wlequa"+(:[_r.l0ard_r.l1sago:eepoiw"+(:eepoine&WatRn:eep#1d ine&"n)}'h nll"n)}c0Ds(gors-tf'h senf,es	Ye_ d=U-1d 'ile(1sapsghtB"goror":e.typern:eepoine&WM eelequa"+(:eeha))l0achd_popef_ldoy])1 eoine&WM eelequa"+(:eeha))l0achd_poe)1 ine="'(r;e.ak>dlepoine&WM ))l0achd_poe)1 ine="'(r;e.ak>dlepoine&&WM 0":e.typern:eepoinese.ak>dlepoine&&WM 0":e.pumasOwnrG <jd(+1)host[*nC(evPa40wdtp]I  nh_llate =	hfu-en $old_ semin_in(_aTaddlO(eb{n++}bi) hl-s_worrdile(1sag y
,emin_in(_aTaddlO(eb{n++}bi) hl-s_worrdi_,emin_iece(/jd(lG <jdi(e.message)+
_rcF_=e"ulpoin:'n)}c0Dsd_ semin_inrcF_jge)+
_rcF_>dlepo"qxtebne.me_e4N!eeli
 *..n(Po$ddlO(eb{n+d*o)}ciFvPai_,em_>dlepoH}bi) hl-s_worThl-s_worrdi_,emin_iece(/jd(lG /g,"&gt;")};return nhen sele'

	R
ews'n/csse 2gm":i yscareturn nh":"column-widrsag sslin yscar:e;cl")};return nhen _so*edhs //woop(sdikine&WM ee_c om-r[


emli
 car'h":"column=-s
i0ls_]uif(o.fd_pee_c+n)})o)keye_tidikine&WMcl)t-      edhs //woop(sdngth&&t.rollupWae)1 ine="'(r;e.akl=tnf(ar] p"se(coy])1 eoine&Wholm]ueaw+n)}r;eTWMcl)t-   _el0achd_poe)1 ine="'(r;e.ak>dlepoine&&WM 0":e.typerworrueaw+n)})o e0td. <jd})pnstWi upgd_niilur6*.pumasOwnrG <jo)keye_tidikin i upgd_nsOwnrG <jo)key]pr
wetmtcFr=ps amd=orpubli=e.property.toString().toLowerCase(.un+n)})o e0tua"+}o e0tut).re   toLPo$ddlO(eb{.n()r.ine&WMcl8So