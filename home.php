<?php
    $currentFile = basename(__FILE__); 
    require("debugstatus.inc");    
    require("tools.inc");
    require("header.inc");
    require("tableclass.inc");
?>

<div class="main">
    
    <!--div id="menu" class="FL">
        <ul>
        <li>menu1</li>
        <li>menu2</li>
        <li>FAQ</li>
        <li><a href="http://dot-bit.org/Namecoin">About</a></li>
        </ul>
    </div-->

    <!-- right side widgets -->
    <div class="masterWidget" style="float:right;padding-right:0;margin-right:0;padding-top:0;margin-top:0">
        <div class="widget" style="width:300px;">
            <h3>Download</h3><br>
            Version Q.3.72<br>
            &nbsp;&nbsp;Qt GUI and daemon.<br>
            &nbsp;&nbsp;<a target="_blank" href="https://github.com/namecoinq/namecoinq/tree/vQ.3.72">Sources on Github</a><br>
            &nbsp;&nbsp;<a href="http://namecoin.info/files/namecoin_win_vQ.3.72.zip">Windows binary</a><br>
            &nbsp;&nbsp;Mac binary - ?<br>
            &nbsp;&nbsp;<a target="_blank" href="https://bitcointalk.org/index.php?topic=236340.msg3436752#msg3436752">Hashes on Bitcointalk</a><br>
            <br>
            Older versions and more<br>
            &nbsp;&nbsp;<a href="http://dot-bit.org/files/">http://dot-bit.org/files/<br> 
            <br>
        </div>
        <div class="widget" style="width:300px;">
            <h3>Donate</h3><br>
            <a target="_blank" href="http://dot-bit.org/forum/viewtopic.php?f=5&t=473">Namecoin marketing and development fund</a>.<br>
            NMC: NDtPuyg3adscr6HCE1GUiSsKPtA8ewKgz3<br>
            BTC: 17Si1rdVd6gaYbwLq9NkXtGV9Qzt3NmTKa<br>
        </div>
        <div class="widget">
            <h3>Exchanges</h3> - <a target="_blank" href="http://dot-bit.org/Trade">details on the wiki</a>
            <ul>
                <li><a target="_blank" href="https://btc-e.com">btc-e</a></li>
                <li><a target="_blank" href="https://cryptonit.net">cryptonit</a></li>
                <li><a target="_blank" href="https://kraken.com">Kraken</a><br>    </li>                
                <li><a target="_blank" href="http://liliontransfer.org">Lilion Transfer</a></li>
                <li><a target="_blank" href="https://vircurex.com">Vircurex</a><br>    </li>                
            </ul>
        </div>               
        <div class="widget">
            <h3>Namecoin websites</h3><br>
            <ul>
                <!--<li><a target="_blank" href="http://gee.bit">gee.bit</a> 
                        <br>  </li>            -->
                <li><a target="_blank" href="http://bitse.bit">Dot-Bit Search Engine</a>
				        (<a target="_blank" href="http://bitse.uberbills.com">basic dns</a>)<br>  </li>                        
                <li><a target="_blank" href="http://explorer.bit">Namecoin Block Explorer</a> 
                        (<a target="_blank" href="http://explorer.dot-bit.org/">basic dns</a>)<br>  </li>
                <li><a target="_blank" href="http://dc-charts.com/?dc=2&ex=0&cu=0&sw=0&dl=1&sc=0">dc-charts</a></li>
                <li><a target="_blank" href="http://nx.bit">nx.bit</a> 
                        (<a target="_blank" href="http://blockchained.com/namecoin">basic dns</a>) </li>
            </ul>
        </div>        
    </div>

    <!-- main widgets -->
    <div class="masterWidget">
        <h3>What is Namecoin?</h3><br>
        <p>Namecoin is a revolutionary new free, open-source software and network which decentralizes and improves security for many Internet applications, such as websites (domain names, HTTPS, and website logins) and private communication (Off-the-Record IM and Bitmessage). As <a href="http://bitcoin.org" target="_blank">Bitcoin</a> (a decentralized cryptocurrency) frees money, Namecoin frees access to information. Namecoin works by implementing a decentralized, secure key/value registration and transfer system using Bitcoin technology (don't worry if you don't know what that means). Namecoin-enabled services cannot be censored or hijacked by most adversaries, in the same way that Bitcoin currency cannot be frozen or seized by most adversaries. Namecoin-enabled services also offer a greater degree of privacy than many non-Namecoin alternatives.</p>

        <p>Note that Namecoin is a work-in-progress, and should not be used (yet) in situations where censorship or hijacking could result in severe loss of property or danger to personal safety.</p>
        
        <h3>Uses for Websites</h3>

        <p>Namecoin has the following uses for website security, privacy, and censorship resistance:</p>

        <ul>
            <li>
            Domain Name System (.bit DNS)
            <ul>
                <li>Domain names are the words you type into a web browser (e.g. "www.google.com") which allow the browser to find the correct website.</li>
                <li>Namecoin offers a new type of domain name (domain names ending in ".bit") which enables new features not possible with standard domains such as ".com" domains.</li>
                <li>Most domains can be seized or blocked by governments and corporations who don't like the website in question.  In contrast, .bit domains are not subject to censorship like other domains are.</li>
                <li>Most domains can be hijacked by a malicious user on your network (or your ISP itself), directing you to the wrong website.  This could be used to steal important personal information, money, or your identity.  In contrast, .bit domains cannot be hijacked like other domains can.</li>
                <li>Most domains require you to tell a server (run by a corporation) every time you visit a website, which threatens your privacy.  Looking up a .bit domain does not produce any network traffic, which provides better anonymity than other domains.</li>
                <?php if(false) { ?>
                <li>Learn how to register or update a .bit domain.</li>
                <li>Learn how to view .bit domains.</li>
                <?php } ?>
            </ul>
            </li>

            <li>
            HTTPS Authentication (NMCSEC)
            <ul>
                <li>HTTPS is the encryption system which protects your communications with secure websites like banks and stores.</li>
                <li>All .bit websites can use HTTPS (called NMCSEC).</li>
                <li>Unlike traditional HTTPS which requires relying on a corporation or government to identify a website (which results in major security problems when that corporation or government makes a mistake or has malicious intent), NMCSEC can securely make sure you're talking to the correct website without relying on any corporation or government.</li>
                <li>Unlike traditional HTTPS where website owners have to pay recurring fees for certficates, NMCSEC is free for any website owner who has a .bit domain.</li>
            </ul>
            </li>
            
            <li>
            Website Login (NameID)
            <ul>
                <li>Normally, websites are responsible for handling their users' passwords.  This poses security risks, especially if users use the same password on multiple websites.</li>
                <li>Namecoin allows logging into websites without needing passwords (NameID).</li>
                <li>With NameID, if a website is compromised or has their database leaked, users don't need to change passwords.</li>
                <li>Unlike centralized alternatives like using Facebook or Google to sign into multiple websites, NameID allows using as few or as many identities as you want, without allowing a corporation to see every website you sign into.</li>
                <li>NameID can be implemented on any website, regardless of whether the website supports .bit or NMCSEC.</li>
                <li>Users can use NameID on websites without specific support, by using a NameID-supporting OpenID provider.  (Note that this reduces security compared to the website having built-in support.)</li>
                <?php if(false) { ?>
                <li>Learn how to make your website support NameID.</li>
                <li>Learn how to log into websites with NameID.</li>
                <?php } ?>
            </ul>
            </li>
        </ul>

        <h3>Uses for Private Communication</h3>

        <p>Namecoin has the following uses for private communication:</p>

        <ul>
            <li>
            OTR (Off-the-Record) Instant Messaging
            <ul>
                <li>OTR is a feature in many IM programs (e.g. Pidgin) which encrypts messages.</li>
                <li>In OTR, users are identified by their "fingerprints" (a long number which only they have control over).</li>
                <li>Namecoin can be used to automatically lookup OTR fingerprints without relying on centralized servers.</li>
                <?php if(false) { ?>
                <li>Learn how to automatically lookup other users' OTR fingerprints.</li>
                <li>Learn how to make your OTR fingerprint verifiable with Namecoin.</li>
                <?php } ?>
            </ul>
            </li>

            <li>
            Bitmessage
            <ul>
                <li>Bitmessage is a peer-to-peer (serverless) e-mail alternative which encrypts messages and aims for anonymity.</li>
                <li>In Bitmessage, users are identified by their address (a random sequence of letters and numbers).</li>
                <li>Namecoin can be used to convert human-memorable usernames into Bitmessage addresses.</li>
                <?php if(false) { ?>
                <li>Learn how to send messages to Namecoin-enabled users with Bitmessage.</li>
                <li>Learn how to give your Bitmessage address a human-memorable username.</li>
                <?php } ?>
            </ul>
        </ul>

        <h3>Unimplemented Uses</h3>

        <p>Other proposed (but unimplemented so far) uses include:</p>
        <ul>
            <li>Alias/Identity: user_name => user_public_identity (email, name, gpg key, BTC-adress, etc)</li>
            <li>Timestamping: document_hash => document_infos (name, hash, owner, etc)</li>
            <li>Broadcasting / Messaging</li>
            <li>Web of trust</li>
            <li>Bonds, shares</li>
            <li>Voting</li>
            <li>Torrent tracker</li>
        </ul>

        <h3>For Developers and Technical Users</h3>

        <p>For software developers and technical users, Namecoin allows you to:</p>
        <ul>
            <li>Securely register and transfer arbitrary names (keys), no possible censorship!</li>
            <li>Attach values (data) to the names (currently up to 520 bytes, will be extended)</li>
            <li>Trade and transact namecoins, the digital currency NMC </li>
        </ul>

        <p>To register a name, you must own some namecoins (NMC, the internal cryptocurrency used by the software).</p>

        <p>Find more information in the <a target="_blank" href="http://dot-bit.org/Namecoin_Projects">dot-bit wiki</a>.</p>
   
        <h3>News</h3><br>
        <?php
            //~ $n = new NewsTable();
            //~ $n->add_row("2012-09-25", "", "Finally the release version for windows: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?p=3051#p3051", "v3.50 win32 build", 1));
            
            //~ $n->add_row("2012-06-10", "", "New higher level frontend: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=525", "NMControl", 1));
            
            //~ $n->add_row("2012-05-26", "", "Out now: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=500", "v3.50", 1));

            //~ $n->add_row("2012-05-25", "", "New rpc command: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=499", "sendtoname", 1));


            //~ $n->set_columns_width(array("70px", "5px", ""));
            //~ hte($n->get_table());        
        ?>
          <font color=red>A severe bug was found in the name verification code. It has been fixed as of version Q.3.72<br>
          <b>Only trust the fixed version Q.3.72 or higher with names!</b><br>
          Until block height 150000 your NMC should be safe with other versions, too - but by then everybody needs to have upgraded.<br>
          </font><br>
          For the latest news
		go to the <a target="_blank" href="http://dot-bit.org/forum/">dot-bit forum</a> or
		check out <a target="_blank" href="http://reddit.com/r/namecoin">r/namecoin</a>.
        <?php //        or subscribe to the <a target="_blank" href="https://twitter.com/NamecoinDotInfo">twitter account</a>.<br> ?>
        <br>
        Official anouncements will also be made on <a target="_blank" href="https://bitcointalk.org/index.php?topic=236340.0">this Bitcointalk thread</a>.
    </div>



    <div class="masterWidget" style="width:500px">
    <h3>Namecoin Projects</h3><br>
        Please visit this wiki page for a list of the latest Namecoin related projects:<br>
        <a target="_blank" href="http://dot-bit.org/Namecoin_Projects">http://dot-bit.org/Namecoin_Projects</a>
        <?php
        //~ <div class="widget">
            //~ <h3>Dot-BIT</h3><br>
                //~ A p2p dns system - dot-bit is the first project using namecoin:<br>
                //~ <a target="_blank" href="http://dot-bit.org">dot-bit wiki website</a> - also the general Namecoin wiki<br>
                //~ <a target="_blank" href="http://dot-bit.org/forum/index.php">dot-bit forum</a> - also the general Namecoin forum<br>
        //~ </div>

        //~ <div class="widget">
            //~ <h3>Namecoin Stock Control</h3><br>
                //~ Issuing and handling of multiple Namecoin names, e.g. stocks, bonds.<br>
                //~ Names can be traded manually (otc). Dividends can be payed.<br>
                //~ <a target="_blank" href="https://bitcointalk.org/index.php?topic=123271">bitcointalk thread</a><br>
                //~ <a target="_blank" href="https://github.com/phelixbtc/ncsc">github</a><br>
        //~ </div>

        //~ <div class="widget">
            //~ <h3>Other projects</h3><br>
            //~ identities, alias, messaging, your project?<br>
            //~ <br>
        //~ </div>   
        ?>        
            
    </div>

</div>

<?php require("footer.inc"); ?>
