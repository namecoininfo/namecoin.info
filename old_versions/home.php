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
            You can find the latest version in the <a href="http://dot-bit.org">dot-bit wiki</a>.
        </div>
        <div class="widget" style="width:300px;">
            <h3>Donate</h3><br>
            <a href="http://dot-bit.org/forum/viewtopic.php?f=5&t=473">Namecoin marketing and development fund</a>.<br>
            NMC: NDtPuyg3adscr6HCE1GUiSsKPtA8ewKgz3<br>
            BTC: 17Si1rdVd6gaYbwLq9NkXtGV9Qzt3NmTKa<br>
        </div>
        <div class="widget">
            <h3>Exchanges</h3>
            <ul>
                <li><a target="_blank" href="http://exchange.bitparking.com">bitparking</a><br>    </li>
                <li><a target="_blank" href="http://btc-e.com">btc-e</a></li>
            </ul>
        </div>               
        <div class="widget">
            <h3>Namecoin websites</h3><br>
            <ul>
                <!--<li><a target="_blank" href="http://gee.bit">gee.bit</a> 
                        <br>  </li>            -->
                <li><a target="_blank" href="http://bitse.bit">Dot-Bit Search Engine</a> <br>  </li>                        
                <li><a target="_blank" href="http://explorer.bit">Namecoin Block Explorer</a> 
                        (<a target="_blank" href="http://explorer.dot-bit.org/">basic dns</a>)<br>  </li>
                <li><a target="_blank" href="http://nx.bit">nx.bit</a> 
                        (<a target="_blank" href="http://bitcoinx.com/namecoin">basic dns</a>) </li>                        
            </ul>
        </div>        
    </div>

    <!-- main widgets -->
    <div class="masterWidget">
        <h3>What is Namecoin</h3><br>
        Namecoin is a decentralized naming system based on <a href="http://bitcoin.org" target="_blank">Bitcoin</a> technology (a decentralized cryptocurrency).<br>
        <br>
        It allows you to:
        <ul>
            <li>Securely register and transfer arbitrary names (keys), no possible censorship!</li>
            <li>Attach values (data) to the names (up to 1023 bytes)</li>
            <li>Trade and transact namecoins, the digital currency NMC </li>
        </ul>

        There are plenty of possible use cases. Some examples:
        <ul>
            <li>DNS: domain_name => domain_zone_configuration</li>
            <li>Alias/Identity: user_name => user_public_identity (email, name, gpg key, BTC-adress, etc)</li>
            <li>Timestamping: document_hash => document_infos (name, hash, owner, etc)</li>
            <li>Broadcasting / Messaging</li>
            <li>Web of trust</li>
            <li>Bonds, shares</li>
            <li>Voting</li>
            <li>Torrent tracker</li>
        </ul>

        To register a name, you must own some namecoins (NMC, the internal cryptocurrency used by the software). <br>
        <br>
        <br>
        <br>        
        <h3>News</h3><br>
        <?php>
            $n = new NewsTable();
            $n->add_row("2012-06-10", "", "New higher level frontend: " . 
                         anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=525", "NMControl", 1));
            
            $n->add_row("2012-05-26", "", "Out now: " . 
                         anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=500", "v3.50", 1));

            $n->add_row("2012-05-25", "", "New rpc command: " . 
                         anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=499", "sendtoname", 1));


            $n->set_columns_width(array("70px", "5px", ""));
            hte($n->get_table());        
        ?>
    </div>



    <div class="masterWidget" style="width:500px">
    <h3>Namecoin Projects</h3>
        <div class="widget">
            <h3>Dot-BIT</h3><br>
                A p2p dns system - dot-bit is the first project using namecoin:<br>
                <a target="_blank" href="http://dot-bit.org">dot-bit wiki website</a><br>
                <a target="_blank" href="http://dot-bit.org/forum/index.php">dot-bit forum</a><br>
        </div>

        <div class="widget">
            <h3>Other projects</h3><br>
            identities, alias, messaging, your project?<br>
            <br>
        </div>        
            
    </div>

</div>

<?php require("footer.inc"); ?>