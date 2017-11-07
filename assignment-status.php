<?php
    session_start();
    $form_id = md5(rand());
    $_SESSION["form_id"] = $form_id;
?>
<?php include_once 'includes/header.php'; ?>
            <div class="row">
                <div class="col-md-12 text-center text-muted">
                    <h3>Assignment Submission Status</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <form id="status_form" class="form-inline" autocomplete="off" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Enrolment Number" name="eno" id="eno" required="true"/>
                        </div>
                        <div class="form-group">
                            <select id="program" class="form-control">
                                <option VALUE="">--Select--</option> <option value='ACE'>ACE</option><option value='ACFS'>ACFS</option><option value='ACISE'>ACISE</option><option value='ACPDM'>ACPDM</option><option value='ACPSD'>ACPSD</option><option value='ACSEPD'>ACSEPD</option><option value='ACSM'>ACSM</option><option value='ADACM'>ADACM</option><option value='ADAOM'>ADAOM</option><option value='ADCM'>ADCM</option><option value='ADIT'>ADIT</option><option value='ADTS'>ADTS</option><option value='AIPR'>AIPR</option><option value='APDF'>APDF</option><option value='APSMBIO'>APSMBIO</option><option value='APSMG'>APSMG</option><option value='APSMW'>APSMW</option><option value='APSS'>APSS</option><option value='APVPFV'>APVPFV</option><option value='ASSO'>ASSO</option><option value='ASSOCIATE'>ASSOCIATE</option><option value='ATPD'>ATPD</option><option value='BA'>BA</option><option value='BA3'>BA3</option><option value='BAADM'>BAADM</option><option value='BAASLS'>BAASLS</option><option value='BAAVFX'>BAAVFX</option><option value='BACT'>BACT</option><option value='BAFC'>BAFC</option><option value='BAFD'>BAFD</option><option value='BAFMP'>BAFMP</option><option value='BAIHA'>BAIHA</option><option value='BARCH'>BARCH</option><option value='BBARL'>BBARL</option><option value='BBARS'>BBARS</option><option value='BBARSDL'>BBARSDL</option><option value='BCA'>BCA</option><option value='BCOM'>BCOM</option><option value='BCOMAF'>BCOMAF</option><option value='BCOMCAA'>BCOMCAA</option><option value='BCOMFCA'>BCOMFCA</option><option value='BCSSI'>BCSSI</option><option value='BED'>BED</option><option value='BEDSE'>BEDSE</option><option value='BEDSEHI'>BEDSEHI</option><option value='BEDSEMR'>BEDSEMR</option><option value='BEDSEVI'>BEDSEVI</option><option value='BHM'>BHM</option><option value='BIHM'>BIHM</option><option value='BIT'>BIT</option><option value='BLIS'>BLIS</option><option value='BMIT'>BMIT</option><option value='BMLT'>BMLT</option><option value='BMRHIT'>BMRHIT</option><option value='BNS'>BNS</option><option value='BPCCHN'>BPCCHN</option><option value='BPP'>BPP</option><option value='BPPDS'>BPPDS</option><option value='BPPDS '>BPPDS </option><option value='BRTT'>BRTT</option><option value='BSC'>BSC</option><option value='BSC3'>BSC3</option><option value='BSCFLAD'>BSCFLAD</option><option value='BSCFMRM'>BSCFMRM</option><option value='BSCFWP'>BSCFWP</option><option value='BSCFWT'>BSCFWT</option><option value='BSCHIHA'>BSCHIHA</option><option value='BSCHOT'>BSCHOT</option><option value='BSCLGAD'>BSCLGAD</option><option value='BSCN'>BSCN</option><option value='BSCRFM'>BSCRFM</option><option value='BSW'>BSW</option><option value='BTAE'>BTAE</option><option value='BTCLEVI'>BTCLEVI</option><option value='BTCM'>BTCM</option><option value='BTCSVI'>BTCSVI</option><option value='BTECVI'>BTECVI</option><option value='BTELVI'>BTELVI</option><option value='BTME'>BTME</option><option value='BTMEVI'>BTMEVI</option><option value='BTS'>BTS</option><option value='BTWRE'>BTWRE</option><option value='CAFE'>CAFE</option><option value='CAHC'>CAHC</option><option value='CAHT'>CAHT</option><option value='CAIS'>CAIS</option><option value='CAL'>CAL</option><option value='CAP'>CAP</option><option value='CARH'>CARH</option><option value='CAY'>CAY</option><option value='CBED'>CBED</option><option value='CBS'>CBS</option><option value='CCDP'>CCDP</option><option value='CCEANM'>CCEANM</option><option value='CCITSK'>CCITSK</option><option value='CCLBL'>CCLBL</option><option value='CCLC'>CCLC</option><option value='CCMH'>CCMH</option><option value='CCP'>CCP</option><option value='CCPD'>CCPD</option><option value='CCR'>CCR</option><option value='CCSS'>CCSS</option><option value='CDCW'>CDCW</option><option value='CDM'>CDM</option><option value='CDNK'>CDNK</option><option value='CDNMA'>CDNMA</option><option value='CDO'>CDO</option><option value='CDTP'>CDTP</option><option value='CELL'>CELL</option><option value='CEMBA'>CEMBA</option><option value='CEMPA'>CEMPA</option><option value='CES'>CES</option><option value='CESECP'>CESECP</option><option value='CESEHI'>CESEHI</option><option value='CESEMR'>CESEMR</option><option value='CESEVI'>CESEVI</option><option value='CETE'>CETE</option><option value='CETM'>CETM</option><option value='CFBO'>CFBO</option><option value='CFE'>CFE</option><option value='CFL'>CFL</option><option value='CFN'>CFN</option><option value='CFO'>CFO</option><option value='CFS'>CFS</option><option value='CFSTY'>CFSTY</option><option value='CGL'>CGL</option><option value='CGMSM'>CGMSM</option><option value='CHAA'>CHAA</option><option value='CHBCP'>CHBCP</option><option value='CHBHC'>CHBHC</option><option value='CHCWM'>CHCWM</option><option value='CHET'>CHET</option><option value='CHO'>CHO</option><option value='CHR'>CHR</option><option value='CIAP'>CIAP</option><option value='CIAT'>CIAT</option><option value='CIB'>CIB</option><option value='CIC'>CIC</option><option value='CICTAL'>CICTAL</option><option value='CIE'>CIE</option><option value='CIF'>CIF</option><option value='CIG'>CIG</option><option value='CIHL'>CIHL</option><option value='CIS'>CIS</option><option value='CIT'>CIT</option><option value='CITSM'>CITSM</option><option value='CJD'>CJD</option><option value='CJL'>CJL</option><option value='CLD'>CLD</option><option value='CLGM'>CLGM</option><option value='CLIS'>CLIS</option><option value='CLL'>CLL</option><option value='CLP'>CLP</option><option value='CMCHC'>CMCHC</option><option value='CMCHN'>CMCHN</option><option value='CMSR'>CMSR</option><option value='CNCC'>CNCC</option><option value='CNIC'>CNIC</option><option value='CNIN'>CNIN</option><option value='CNM'>CNM</option><option value='CNOC'>CNOC</option><option value='COF'>COF</option><option value='CPA'>CPA</option><option value='CPABN'>CPABN</option><option value='CPAHM'>CPAHM</option><option value='CPAKM'>CPAKM</option><option value='CPAKP'>CPAKP</option><option value='CPAKT'>CPAKT</option><option value='CPAM'>CPAM</option><option value='CPAMP'>CPAMP</option><option value='CPAOS'>CPAOS</option><option value='CPAT'>CPAT</option><option value='CPATHA'>CPATHA</option><option value='CPE'>CPE</option><option value='CPEL'>CPEL</option><option value='CPF'>CPF</option><option value='CPFM'>CPFM</option><option value='CPHN'>CPHN</option><option value='CPISAS'>CPISAS</option><option value='CPLT'>CPLT</option><option value='CPPDPT'>CPPDPT</option><option value='CPPL'>CPPL</option><option value='CPS'>CPS</option><option value='CPSK'>CPSK</option><option value='CPSL'>CPSL</option><option value='CPVE'>CPVE</option><option value='CRD'>CRD</option><option value='CRF'>CRF</option><option value='CRFF'>CRFF</option><option value='CRH'>CRH</option><option value='CRHT'>CRHT</option><option value='CRM'>CRM</option><option value='CRS'>CRS</option><option value='CRUL'>CRUL</option><option value='CSEPD'>CSEPD</option><option value='CSI'>CSI</option><option value='CSLF'>CSLF</option><option value='CSM'>CSM</option><option value='CSSA'>CSSA</option><option value='CSUC'>CSUC</option><option value='CSUS'>CSUS</option><option value='CSWCJS'>CSWCJS</option><option value='CTAO'>CTAO</option><option value='CTE'>CTE</option><option value='CTGS'>CTGS</option><option value='CTPM'>CTPM</option><option value='CTS'>CTS</option><option value='CTVM'>CTVM</option><option value='CUL'>CUL</option><option value='CVA'>CVA</option><option value='CVAA'>CVAA</option><option value='CVAP'>CVAP</option><option value='CVAS'>CVAS</option><option value='CWDL'>CWDL</option><option value='CWDM'>CWDM</option><option value='CWED'>CWED</option><option value='CWHM'>CWHM</option><option value='CYP'>CYP</option><option value='DAFE'>DAFE</option><option value='DAQ'>DAQ</option><option value='DBPOFA'>DBPOFA</option><option value='DCCN'>DCCN</option><option value='DCE'>DCE</option><option value='DCH'>DCH</option><option value='DCIM'>DCIM</option><option value='DCLC'>DCLC</option><option value='DCLE'>DCLE</option><option value='DCLEG'>DCLEG</option><option value='DCLEVI'>DCLEVI</option><option value='DCO'>DCO</option><option value='DCSVI'>DCSVI</option><option value='DCUL'>DCUL</option><option value='DCYP'>DCYP</option><option value='DDE'>DDE</option><option value='DDT'>DDT</option><option value='DECE'>DECE</option><option value='DECVI'>DECVI</option><option value='DELED'>DELED</option><option value='DELVI'>DELVI</option><option value='DEME'>DEME</option><option value='DESD'>DESD</option><option value='DFPT'>DFPT</option><option value='DFS'>DFS</option><option value='DFSTYM'>DFSTYM</option><option value='DHNE'>DHNE</option><option value='DHOTRM'>DHOTRM</option><option value='DIM'>DIM</option><option value='DIPP'>DIPP</option><option value='DME'>DME</option><option value='DMEVI'>DMEVI</option><option value='DMLT'>DMLT</option><option value='DMT'>DMT</option><option value='DNA'>DNA</option><option value='DNHE'>DNHE</option><option value='DNS'>DNS</option><option value='DPE'>DPE</option><option value='DPLAD'>DPLAD</option><option value='DPVCPO'>DPVCPO</option><option value='DRIT'>DRIT</option><option value='DSM'>DSM</option><option value='DTG'>DTG</option><option value='DTS'>DTS</option><option value='DUL'>DUL</option><option value='DVAPFV'>DVAPFV</option><option value='DWED'>DWED</option><option value='DWM'>DWM</option><option value='EMBAHM'>EMBAHM</option><option value='EMBAIHM'>EMBAIHM</option><option value='EMBAIT'>EMBAIT</option><option value='EXMBA'>EXMBA</option><option value='FCED'>FCED</option><option value='IPHDPA'>IPHDPA</option><option value='LPHECO'>LPHECO</option><option value='LPNSSD'>LPNSSD</option><option value='MAAE'>MAAE</option><option value='MAAE2'>MAAE2</option><option value='MAAN'>MAAN</option><option value='MAAPM'>MAAPM</option><option value='MADE'>MADE</option><option value='MADE2'>MADE2</option><option value='MAEDS'>MAEDS</option><option value='MAEDU'>MAEDU</option><option value='MAEMPM'>MAEMPM</option><option value='MAFRM'>MAFRM</option><option value='MAGD'>MAGD</option><option value='MAH'>MAH</option><option value='MAJMC'>MAJMC</option><option value='MAPC'>MAPC</option><option value='MAPD'>MAPD</option><option value='MAPY'>MAPY</option><option value='MARD'>MARD</option><option value='MASA'>MASA</option><option value='MASAS'>MASAS</option><option value='MATS'>MATS</option><option value='MAWGS'>MAWGS</option><option value='MAWGSCL'>MAWGSCL</option><option value='MBAAVBM'>MBAAVBM</option><option value='MBABFEV'>MBABFEV</option><option value='MBABM'>MBABM</option><option value='MBACG'>MBACG</option><option value='MBACN'>MBACN</option><option value='MBACT'>MBACT</option><option value='MBAEV'>MBAEV</option><option value='MBAFM'>MBAFM</option><option value='MBAFT'>MBAFT</option><option value='MBAHM'>MBAHM</option><option value='MBAIHM'>MBAIHM</option><option value='MBAITM'>MBAITM</option><option value='MBAMAFCI'>MBAMAFCI</option><option value='MBANIM'>MBANIM</option><option value='MBARS'>MBARS</option><option value='MBASCMFL'>MBASCMFL</option><option value='MBATEXM'>MBATEXM</option><option value='MCA'>MCA</option><option value='MCOM'>MCOM</option><option value='MCOM2'>MCOM2</option><option value='MCOMBPCG'>MCOMBPCG</option><option value='MCOMFT'>MCOMFT</option><option value='MCOMIDT'>MCOMIDT</option><option value='MCOMMAFS'>MCOMMAFS</option><option value='MEC'>MEC</option><option value='MED'>MED</option><option value='MEDSEHI'>MEDSEHI</option><option value='MEDSELD'>MEDSELD</option><option value='MEDSEMR'>MEDSEMR</option><option value='MEDSEVI'>MEDSEVI</option><option value='MEG'>MEG</option><option value='MFAP'>MFAP</option><option value='MGPS'>MGPS</option><option value='MHA'>MHA</option><option value='MHD'>MHD</option><option value='MIPL'>MIPL</option><option value='MLD'>MLD</option><option value='MLIS'>MLIS</option><option value='MP'>MP</option><option value='MPA'>MPA</option><option value='MPAHVM'>MPAHVM</option><option value='MPATHA'>MPATHA</option><option value='MPB'>MPB</option><option value='MPHIL'>MPHIL</option><option value='MPHILCOM'>MPHILCOM</option><option value='MPHILDE'>MPHILDE</option><option value='MPHILEC'>MPHILEC</option><option value='MPHILPS'>MPHILPS</option><option value='MPHILRSO'>MPHILRSO</option><option value='MPHILSO'>MPHILSO</option><option value='MPHILSOC'>MPHILSOC</option><option value='MPHILSW'>MPHILSW</option><option value='MPHILTH'>MPHILTH</option><option value='MPHILTT'>MPHILTT</option><option value='MPP'>MPP</option><option value='MPS'>MPS</option><option value='MSBOBI'>MSBOBI</option><option value='MSBOCC'>MSBOCC</option><option value='MSBOMM'>MSBOMM</option><option value='MSBOT'>MSBOT</option><option value='MSCAEC'>MSCAEC</option><option value='MSCAS'>MSCAS</option><option value='MSCBIBO'>MSCBIBO</option><option value='MSCCAD'>MSCCAD</option><option value='MSCCFT'>MSCCFT</option><option value='MSCCHEM'>MSCCHEM</option><option value='MSCCRD'>MSCCRD</option><option value='MSCDFSM'>MSCDFSM</option><option value='MSCFDP'>MSCFDP</option><option value='MSCFMRM'>MSCFMRM</option><option value='MSCFWT'>MSCFWT</option><option value='MSCLGAD'>MSCLGAD</option><option value='MSCLSC'>MSCLSC</option><option value='MSCMACS'>MSCMACS</option><option value='MSCRFM'>MSCRFM</option><option value='MSCVMCD'>MSCVMCD</option><option value='MSNN'>MSNN</option><option value='MSO'>MSO</option><option value='MSST'>MSST</option><option value='MSW'>MSW</option><option value='MSWC'>MSWC</option><option value='MSWNE'>MSWNE</option><option value='MSWP'>MSWP</option><option value='MTECHAE'>MTECHAE</option><option value='MTECHCS'>MTECHCS</option><option value='MTECHESD'>MTECHESD</option><option value='MTECHISS'>MTECHISS</option><option value='MTECHNB'>MTECHNB</option><option value='MTECHNE'>MTECHNE</option><option value='MTECHSD'>MTECHSD</option><option value='MTECHSR'>MTECHSR</option><option value='MTECHST'>MTECHST</option><option value='MTECHTC'>MTECHTC</option><option value='MTECHTS'>MTECHTS</option><option value='MTECHVD'>MTECHVD</option><option value='MTM'>MTM</option><option value='MTTM'>MTTM</option><option value='NCDCP'>NCDCP</option><option value='NIPDF'>NIPDF</option><option value='NIPFPP'>NIPFPP</option><option value='NIPOA'>NIPOA</option><option value='NIPWM'>NIPWM</option><option value='PCSEPD'>PCSEPD</option><option value='PDCDM'>PDCDM</option><option value='PGCAE'>PGCAE</option><option value='PGCAP'>PGCAP</option><option value='PGCBGSA'>PGCBGSA</option><option value='PGCBHT'>PGCBHT</option><option value='PGCCL'>PGCCL</option><option value='PGCCL_OL'>PGCCL_OL</option><option value='PGCCP'>PGCCP</option><option value='PGCE'>PGCE</option><option value='PGCEDS'>PGCEDS</option><option value='PGCENC'>PGCENC</option><option value='PGCEPD'>PGCEPD</option><option value='PGCGI'>PGCGI</option><option value='PGCGPS'>PGCGPS</option><option value='PGCHI'>PGCHI</option><option value='PGCIATIVI'>PGCIATIVI</option><option value='PGCIERA'>PGCIERA</option><option value='PGCIV'>PGCIV</option><option value='PGCMHT'>PGCMHT</option><option value='PGCMI'>PGCMI</option><option value='PGCML'>PGCML</option><option value='PGCMRR'>PGCMRR</option><option value='PGCOI'>PGCOI</option><option value='PGCP'>PGCP</option><option value='PGCPDN'>PGCPDN</option><option value='PGCPDT'>PGCPDT</option><option value='PGCPM'>PGCPM</option><option value='PGCPP'>PGCPP</option><option value='PGCPPK'>PGCPPK</option><option value='PGCQM'>PGCQM</option><option value='PGCRW'>PGCRW</option><option value='PGCSO'>PGCSO</option><option value='PGCSRVS'>PGCSRVS</option><option value='PGCTW'>PGCTW</option><option value='PGCULSA'>PGCULSA</option><option value='PGDAC'>PGDAC</option><option value='PGDACP'>PGDACP</option><option value='PGDAE'>PGDAE</option><option value='PGDAPP'>PGDAPP</option><option value='PGDAST'>PGDAST</option><option value='PGDBE'>PGDBE</option><option value='PGDBP'>PGDBP</option><option value='PGDCC'>PGDCC</option><option value='PGDCFT'>PGDCFT</option><option value='PGDCJ'>PGDCJ</option><option value='PGDDE'>PGDDE</option><option value='PGDDHM'>PGDDHM</option><option value='PGDDM'>PGDDM</option><option value='PGDEDS'>PGDEDS</option><option value='PGDEL'>PGDEL</option><option value='PGDEMA'>PGDEMA</option><option value='PGDENLW'>PGDENLW</option><option value='PGDENLWOL'>PGDENLWOL</option><option value='PGDESD'>PGDESD</option><option value='PGDET'>PGDET</option><option value='PGDFCS'>PGDFCS</option><option value='PGDFIMKT'>PGDFIMKT</option><option value='PGDFMP'>PGDFMP</option><option value='PGDFSQM'>PGDFSQM</option><option value='PGDFSTYD'>PGDFSTYD</option><option value='PGDFSTYDM'>PGDFSTYDM</option><option value='PGDFT'>PGDFT</option><option value='PGDGBL'>PGDGBL</option><option value='PGDGBLFF'>PGDGBLFF</option><option value='PGDGBLP'>PGDGBLP</option><option value='PGDGBLPT'>PGDGBLPT</option><option value='PGDGM'>PGDGM</option><option value='PGDGPS'>PGDGPS</option><option value='PGDHAM'>PGDHAM</option><option value='PGDHE'>PGDHE</option><option value='PGDHEM'>PGDHEM</option><option value='PGDHHM'>PGDHHM</option><option value='PGDHIVM'>PGDHIVM</option><option value='PGDHO'>PGDHO</option><option value='PGDIBO'>PGDIBO</option><option value='PGDICG'>PGDICG</option><option value='PGDIE'>PGDIE</option><option value='PGDIPR'>PGDIPR</option><option value='PGDIS'>PGDIS</option><option value='PGDLAN'>PGDLAN</option><option value='PGDLPO'>PGDLPO</option><option value='PGDMCH'>PGDMCH</option><option value='PGDMD'>PGDMD</option><option value='PGDMISHE'>PGDMISHE</option><option value='PGDMRR'>PGDMRR</option><option value='PGDPD'>PGDPD</option><option value='PGDPDN'>PGDPDN</option><option value='PGDPM'>PGDPM</option><option value='PGDPPED'>PGDPPED</option><option value='PGDPSM'>PGDPSM</option><option value='PGDRBI'>PGDRBI</option><option value='PGDRD'>PGDRD</option><option value='PGDREPY'>PGDREPY</option><option value='PGDREPYDL'>PGDREPYDL</option><option value='PGDRP'>PGDRP</option><option value='PGDSIC'>PGDSIC</option><option value='PGDSLM'>PGDSLM</option><option value='PGDSO'>PGDSO</option><option value='PGDSS'>PGDSS</option><option value='PGDSW'>PGDSW</option><option value='PGDSWT'>PGDSWT</option><option value='PGDT'>PGDT</option><option value='PGDTAC'>PGDTAC</option><option value='PGDTCD'>PGDTCD</option><option value='PGDTRM'>PGDTRM</option><option value='PGDUG'>PGDUG</option><option value='PGDUPDL'>PGDUPDL</option><option value='PGDVSSA'>PGDVSSA</option><option value='PGDWGS'>PGDWGS</option><option value='PGJMC'>PGJMC</option><option value='PGPCSEHI'>PGPCSEHI</option><option value='PGPCSEMR'>PGPCSEMR</option><option value='PGPCSEVI'>PGPCSEVI</option><option value='PGPDSEHI'>PGPDSEHI</option><option value='PGPDSEMR'>PGPDSEMR</option><option value='PGPDSEVI'>PGPDSEVI</option><option value='PHD'>PHD</option><option value='PHDAE'>PHDAE</option><option value='PHDAGE'>PHDAGE</option><option value='PHDAL'>PHDAL</option><option value='PHDAN'>PHDAN</option><option value='PHDBC'>PHDBC</option><option value='PHDCDEV'>PHDCDEV</option><option value='PHDCEE'>PHDCEE</option><option value='PHDCEM'>PHDCEM</option><option value='PHDCENG'>PHDCENG</option><option value='PHDCHE'>PHDCHE</option><option value='PHDCISC'>PHDCISC</option><option value='PHDCMCE'>PHDCMCE</option><option value='PHDCO'>PHDCO</option><option value='PHDCOM'>PHDCOM</option><option value='PHDDE'>PHDDE</option><option value='PHDDR'>PHDDR</option><option value='PHDDS'>PHDDS</option><option value='PHDEC'>PHDEC</option><option value='PHDEDS'>PHDEDS</option><option value='PHDEDU'>PHDEDU</option><option value='PHDENG'>PHDENG</option><option value='PHDFA'>PHDFA</option><option value='PHDFL'>PHDFL</option><option value='PHDFN'>PHDFN</option><option value='PHDGDS'>PHDGDS</option><option value='PHDGG'>PHDGG</option><option value='PHDGTS'>PHDGTS</option><option value='PHDGY'>PHDGY</option><option value='PHDHIN'>PHDHIN</option><option value='PHDHIS'>PHDHIS</option><option value='PHDITS'>PHDITS</option><option value='PHDJMC'>PHDJMC</option><option value='PHDLAW'>PHDLAW</option><option value='PHDLIS'>PHDLIS</option><option value='PHDLS'>PHDLS</option><option value='PHDMCE'>PHDMCE</option><option value='PHDMD'>PHDMD</option><option value='PHDMGMT'>PHDMGMT</option><option value='PHDMT'>PHDMT</option><option value='PHDMTED'>PHDMTED</option><option value='PHDMU'>PHDMU</option><option value='PHDNUR'>PHDNUR</option><option value='PHDPA'>PHDPA</option><option value='PHDPC'>PHDPC</option><option value='PHDPH'>PHDPH</option><option value='PHDPS'>PHDPS</option><option value='PHDPVA'>PHDPVA</option><option value='PHDRD'>PHDRD</option><option value='PHDRSO'>PHDRSO</option><option value='PHDSOC'>PHDSOC</option><option value='PHDSTAT'>PHDSTAT</option><option value='PHDSW'>PHDSW</option><option value='PHDTH'>PHDTH</option><option value='PHDTS'>PHDTS</option><option value='PHDTT'>PHDTT</option><option value='PHDVED'>PHDVED</option><option value='PHDVET'>PHDVET</option><option value='PHDWS'>PHDWS</option><option value='SAVINI'>SAVINI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" id="form_id" value="<?php echo $form_id; ?>" hidden="true"/>
                            <button type="submit" class="form-control btn btn-primary btn-outline" style="line-height: 0;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row" id="instructions" style="margin-top: 30px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">INSTRUCTIONS</div>
                        <div class="panel-body text-justify">
                            <ul class="list-group">
                                <li class="list-group-item">Welcome to Assignment Submission Status Finder.</li>
                                <li class="list-group-item">It gets you your assignment/project submission status in just one easy step.</li>
                                <li class="list-group-item">Enter your enrolment number and program in the form above and press the 'Submit' button.</li>
                                <li class="list-group-item">In few moments, the status will be displayed here.</li>
                            </ul>
                        </div>
                        <div class="panel-footer text-justify">
                            <strong>Note: </strong>
                            Displaying of status could take some time based on server load and traffic,
                            Do not refresh the page in the meantime.
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row" id="status">
                <br/>
                <div class="col-md-8 col-md-offset-2">
                    <img src="static/image/assignment.png" alt="assignment-status" class="img-rounded img-responsive" style="margin: auto;">
                    <br/>
                    <table id="status-table" class='table table-striped table-bordered text-center'></table>
                </div>
                <div class="col-md-2"></div>
            </div>
<?php include_once 'includes/footer.php'; ?>