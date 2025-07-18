<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="terms-main">
    <section data-section="terms">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header justify-between">
                    <h1 class="sc-ttl animate fadeIn">
                        Terms
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Terms",
                            "url" => ""
                        ]
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div class="content">
                    <div class="content-marker">
                        <ul class="content-marker-list">
                            <li>
                                <a href="<?php echo $root; ?>terms.php" class="content-marker-item active">
                                    Terms
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>terms.php" class="content-marker-item">
                                    Privacy
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $root; ?>terms.php" class="content-marker-item">
                                    Cookie
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content-text">
                        <div class="entry-content entry-fadeIn">
                            <p>Welcome to Website Name!
                                <br>These terms and conditions outline the rules and regulations for the use of Company Name's Website, located at Website.com.
                                <br>By accessing this website we assume you accept these terms and conditions. Do not continue to use Website Name if you do not agree to take all of the terms and conditions stated on this page.
                                <br>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: “Client”, “You” and “Your” refers to you, the person log on this website and compliant to the Company's terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.
                            </p>

                            <p>
                                <strong>Cookies</strong>
                                <br>We employ the use of cookies. By accessing Website Name, you agreed to use cookies in agreement with the Company Name's Privacy Policy.
                                Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.
                            </p>

                            <p>
                                <strong>License</strong>
                                <br>Unless otherwise stated, Company Name and/or its licensors own the intellectual property rights for all material on Website Name. All intellectual property rights are reserved. You may access this from Website Name for your own personal use subjected to restrictions set in these terms and conditions.
                            </p>

                            <p>
                                <strong>You must not:</strong>
                            </p>
                            <ul class="wp-block-list">
                                <li>Republish material from Website Name</li>
                                <li>Sell, rent or sub-license material from Website Name</li>
                                <li>Reproduce, duplicate or copy material from Website Name</li>
                                <li>Redistribute content from Website Name</li>
                            </ul>

                            <p>
                                This Agreement shall begin on the date hereof.
                                <br>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Company Name does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Company Name,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Company Name shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.
                            </p>

                            <p>
                                Company Name reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.
                            </p>

                            <p>
                                You warrant and represent that:
                            </p>
                            <ul class="wp-block-list">
                                <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                                <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark, of any third party;</li>
                                <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                                <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                            </ul>

                            <p>
                                You hereby grant Company Name a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.
                            </p>

                            <p>
                                Hyperlinking to our Content
                                <br>The following organizations may link to our Website without prior written approval:
                            </p>

                            <ul class="wp-block-list">
                                <li>Government agencies;</li>
                                <li>Search engines;</li>
                                <li>News organizations;</li>
                                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                <li>Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>