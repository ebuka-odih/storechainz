@extends('pages.layout.app')
@section('content')

<section class="slide whiteSlide parallax slow coinomi-intro" data-title="Home">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-12-12">
                    <div class="showForPhone showForPhablet margin-bottom-2 ae-1 fromLeft" style="display:none">
                        <img src="https://www.coinomi.com/svg/coinomi-mark-color.svg" alt="Coinomi Logo" class="coinomiLogoMobile">
                    </div>
                    <ul class="flex fixedSpaces verticalCenter">
                        <li class="col-7-12 intro-text">
                            <h1 class="big ae-1 fromLeft">The blockchain wallet trusted by millions</h1>
                            <div class="accent ae-1 fromLeft blue"></div>
                            <div class="ae-2 fromLeft">
                                <p class="hero">Securely store, manage and exchange Bitcoin, Ethereum, and <a href="assets/index.html">more than 1,770 other blockchain assets</a>.</p>
                            </div>
                            <div class="buttons">
                                <a href="downloads/index.html" class="button black ae-3 fromCenter">Download</a><a class="button black stroke ae-3 fromCenter nextSlide">Learn more</a>
                            </div>
                            <ul class="intro-logos ae-4">
                                <li><span data-tooltip="Full native support for all SegWit-enabled coins"><img src="https://www.coinomi.com/svg/segwit.svg" alt="Segwit"></span></li>
                                <li class="separator"></li>
                                <li><span data-tooltip="Available for iOS"><svg class="os"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#apple"></use></svg></li>
                                <li><span data-tooltip="Available on Google Play"><svg class="os"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googleplay"></use></svg></span></li>
                                <li><span data-tooltip="Available as an .apk download"><svg class="os"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#android"></use></svg></li>
                                <li class="separator"></li>
                                <li><span data-tooltip="Available for Windows"><svg class="os"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#windows"></use></svg></span></li>
                                <li><span data-tooltip="Available for macOS"><svg class="os"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#macos"></use></svg></span></li
                                <li><span data-tooltip="Available for Linux"><svg class="os"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linux"></use></svg></span></li>
                            </ul>
                        </li>
                        <li class="col-5-12">
                            <ul class="slider autoplay clickable intro-slider ae-4" data-slider-id="screenshots">
                                <li class="selected"><img src="https://www.coinomi.com/img/phone-screenshot-1.png" class="wide" alt="Screenshot 1" /></li>
                                <li><img src="https://www.coinomi.com/img/phone-screenshot-2.png" class="wide" alt="Screenshot 2" /></li>
                                <li><img src="https://www.coinomi.com/img/phone-screenshot-3.png" class="wide" alt="Screenshot 3" /></li>
                                <li><img src="https://www.coinomi.com/img/phone-screenshot-4.png" class="wide" alt="Screenshot 4" /></li>
                                <li><img src="https://www.coinomi.com/img/phone-screenshot-5.png" class="wide" alt="Screenshot 5" /></li>
                            </ul>
                            <ul class="controller dots ae-3 fromCenter" data-slider-id="screenshots">
                                <li class="dot selected"></li>
                                <li class="dot"></li>
                                <li class="dot"></li>
                                <li class="dot"></li>
                                <li class="dot"></li>
                            </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background hideForPhone hideForPhablet backgroundImageDots" data-velocity="30"></div>
    </div>
</section>
<section name="why" class="slide fade whiteSlide coinomi-why" data-title="Why choose Coinomi?">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-10-12 toCenter">
                    <h1 class="ae-1">Why Storechainz?</h1>
                    <div class="accent sub ae-1 blue center"></div>
                    <div class="ae-2"><p class="hero">Storechainz is already trusted by millions of users. <br>This is what makes it a popular choice:</p></div>
                </div>
                <div class="fix-12-12">
                    <ul class="flex coinomi-why">
                        <li class="col-4-12 ae-3 range">
                            <div class="item-image">
                                <img src="https://www.coinomi.com/svg/money.svg" alt="Money">
                            </div>
                            <div class="item-text">
                                <h3>The broadest range of crypto.</h3>
                                <div class="accent micro green"></div>
                                <p class="micro opacity-5">Storechainz is a security-first, multi-chain wallet for both mobile &amp; desktop that provides native support and true ownership for more than 125 blockchains (the biggest number in the industry for non-custodial wallets) and thousands of tokens.</p>
                                <div class="margin-top-1 margin-bottom-1"><a href="assets/index.html" class="button small orange">Supported assets</a></div >
                            </div>
                        </li>
                        <li class="col-4-12 ae-4 trust">
                            <div class="item-image">
                                <img src="https://www.coinomi.com/svg/trust.svg" alt="Trust">
                            </div>
                            <div class="item-text">
                                <h3>The highest level of trust.</h3>
                                <div class="accent micro orange"></div>
                                <p class="micro opacity-5">Founded back in 2014, Storechainz is the oldest multi-chain wallet available, with millions of active users. Most importantly, no Storechainz wallet has ever been hacked or otherwise compromised to date.</p>
                            </div>
                        </li>
                        <li class="col-4-12 ae-5 versatility">
                            <div class="item-image">
                                <img src="https://www.coinomi.com/svg/globe.svg" alt="Globe">
                            </div>
                            <div class="item-text">
                                <h3>The most versatile global app.</h3>
                                <div class="accent micro cyan"></div>
                                <p class="micro opacity-5">Storechainz is Seg-Wit enabled and offers 168 fiat currency representations, readable in 25 languages. All supported assets can be exchanged instantly from within the app via built-in exchanges.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="margin-top-6">
                        <a href="downloads/index.html" class="button black ae-3 fromCenter">Download</a>
                        <a class="button black stroke ae-4 fromCenter nextSlide">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background gradient-dark"></div>
</section>
<section name="features" class="slide black coinomi-features" data-title="Features">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-10-12 toCenter">
                    <h1 class="ae-1">Features</h1>
                    <div class="accent sub ae-1 blue center"></div>
                    <div class="ae-2"><p class="hero">What makes Storechainz stand out?</p></div>
                </div>
                <div class="fix-12-12">
                    <ul class="grid masonry margin-top-3">
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-green">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-security"></use></svg>
                                    <h3>Superb <br>security</h3>
                                </div>
                                <p class="micro">Your private keys <strong>never</strong> leave your device. Strong wallet encryption and cryptography guarantee that your funds will remain safe under your ultimate control.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-purple">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-privacy"></use></svg>
                                    <h3>Enhanced privacy/anonymity</h3>
                                </div>
                                <p class="micro">No KYC bureaucracy to access your funds, no IP association, no identity linking, no transactions tracking. Our servers <strong>anonymize</strong> your requests by hiding your IP address from prying eyes.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-orange">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-multiasset"></use></svg>
                                    <h3>Multi-chain</h3>
                                </div>
                                <p class="micro">Native support for bitcoin and most major altcoins and tokens. Continuous integration of key altcoins and tokens. Highest levels of diligence are applied to coin selection and addition.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-pink">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-trustedsecure"></use></svg>
                                    <h3>Solid track record</h3>
                                </div>
                                <p class="micro">Constant operation since 2014, never hacked, no user has ever lost funds due to Coinomi.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-white">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-support"></use></svg>
                                    <h3>24/7/365 Live Customer Support</h3>
                                </div>
                                <p class="micro">For many, creating wallets, managing crypto and making exchanges is a totally new experience. At Coinomi, friendly support is always on hand, via instant live chat directly in the app or on our website.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-cyan">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-exchange"></use></svg>
                                    <h3>Zero fees</h3>
                                </div>
                                <p class="micro">Zero fees for sending and receiving transactions - you only pay the transaction fees directly to the miners.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-teal">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-crossplatform"></use></svg>
                                    <h3>Cross-platform</h3>
                                </div>
                                <p class="micro">Coinomi has evolved its mobile app to fully support both iOS and Android; and now with the recent addition of its desktop version, wallet access & control is even more convenient.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-yellow">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-hierarchical"></use></svg>
                                    <h3>One-time <br>backup</h3>
                                </div>
                                <p class="micro">Hierarchical Deterministic Wallet (BIP44) logic enables you to keep everything both accessible and secure, with one strong passphrase that you’ll only have to back-up once.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-red">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-exchange"></use></svg>
                                    <h3>Exchanges <br>built-in</h3>
                                </div>
                                <p class="micro">Swap between hundreds of assets and thousands of pairs instantly, through our strategic partners and various DEXes. Privacy is assured, with transaction speeds better than industry norms.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-green">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-exchange"></use></svg>
                                    <h3>Buy crypto with card</h3>
                                </div>
                                <p class="micro">Purchase Crypto directly from Coinomi through the use of our partner Simplex. More options coming soon!</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-white">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-multiasset"></use></svg>
                                    <h3>Multi-seed support</h3>
                                </div>
                                <p class="micro">Import and manage an infinite number of wallets, each with its own encryption settings.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-pink">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-fees"></use></svg>
                                    <h3>Custom and Dynamic miners&apos; fees</h3>
                                </div>
                                <p class="micro">Transaction fees are calculated dynamically, allowing you to get the best value for money at all times. Alternatively, you can set and use your own fees, in all supported coins.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-blue">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-segwit"></use></svg>
                                    <h3>Native <br>SegWit</h3>
                                </div>
                                <p class="micro">Enjoy faster confirmations and lower fees for Bitcoin, Litecoin, and many other cryptocurrencies. Switch dynamically between Bech32, P2SH, and legacy modes.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-white">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-security"></use></svg>
                                    <h3>Cold staking</h3>
                                </div>
                                <p class="micro">Let your crypto work for you. Cold stake supported assets with a single click and earn rewards even when offline</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-lightGreen">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-trustedsecure"></use></svg>
                                    <h3>UTXO Control</h3>
                                </div>
                                <p class="micro">Dusting attacks protection and Do-Not-Spend flags. Choose like-type change addresses to reduce transaction linking. Full UTXO control coming soon! </p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-purple">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-multiasset"></use></svg>
                                    <h3>Full asset support</h3>
                                </div>
                                <p class="micro">Full support for every ERC20, Omnilayer, BEP2, TRC10 tokens and NEM Mosaics. Assets from more protocols are coming soon!</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-lime">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-versatility"></use></svg>
                                    <h3>DApp Browser & Web3 support</h3>
                                </div>
                                <p class="micro">Seamlessly access your favourite DApps with Coinomi’s integrated DApp browser and Web3 support without any compromise on security.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-deepOrange">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-i18n"></use></svg>
                                    <h3>DeFi Ready</h3>
                                </div>
                                <p class="micro">Seamlessly interact with the top DeFi services from inside the app.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-purple">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-sync"></use></svg>
                                    <h3>Trusted Node</h3>
                                </div>
                                <p class="micro">Gain complete financial sovereignty by connecting to your own full Bitcoin node.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-amber">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-desktop"></use></svg>
                                    <h3>Wallet interoperability</h3>
                                </div>
                                <p class="micro">Register and use your FIO or Unstoppable Domain address instead of long public addresses. Send and receive any crypto from any FIO member wallet, and create blockchain-agnostic payment requests.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-indigo">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-streamlined"></use></svg>
                                    <h3>Giftcards</h3>
                                </div>
                                <p class="micro">Quickly convert Crypto into gift cards for your favourite stores directly in the app using our partners at Bidali - more options coming soon!</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-mediumGrey">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-privacy"></use></svg>
                                    <h3>Collectibles</h3>
                                </div>
                                <p class="micro">Full support for ERC721 tokens - store, access and manage your ETH collectibles with peace of mind and security using Coinomi’s innovative interface.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-teal">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-fees"></use></svg>
                                    <h3>Wallet Connect</h3>
                                </div>
                                <p class="micro">Easily and securely access DApps on the big-screen with the use of WalletConnect - link your Coinomi wallet with other apps which support this feature.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-red">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-security"></use></svg>
                                    <h3>Blockchain-based ID</h3>
                                </div>
                                <p class="micro">Coinomi comes with Digi-ID out of the box so that you can forget about the old, insecure credentials and replace them with Coinomi&apos;s top-notch blockchain-based identity modules.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-amber">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-versatility"></use></svg>
                                    <h3>Crypto DNS</h3>
                                </div>
                                <p class="micro">Put an end to vague addresses by replacing them with human-readable aliases across different services and blockchains.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-cyan">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-i18n"></use></svg>
                                    <h3>Multilingual & hyperlocal</h3>
                                </div>
                                <p class="micro">Coinomi is internationally readable in many languages; English, Chinese, Spanish, French, German, Russian and many other languages are supported, with more translations coming soon.</p>
                            </div>
                        </li>
                        <li class="grid-item">
                            <div class="grid-item-content">
                                <div class="text-mediumGrey">
                                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-streamlined"></use></svg>
                                    <h3>Streamlined & user friendly</h3>
                                </div>
                                <p class="micro">Advanced technology enables you to use your altcoins to pay directly to bitcoin addresses and vice versa. No extra steps, or endless sign-ins. One-click cross-chain payment process.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="margin-top-6">
                        <a href="downloads/index.html" class="button black ae-3 fromCenter">Download</a>
                        <a class="button black stroke ae-4 fromCenter nextSlide">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background darkGrey"></div>
</section>
<section class="slide coinomi-desktop" data-title="Coinomi desktop">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-12-12">
                    <ul class="flex verticalCenter">
                        <li class="col-6-12 left ae-1">
                            <img class="laptop margin-bottom-3" src="https://www.coinomi.com/img/desktop.png" data-action="zoom" width="1200" alt="Computer with screenshot of Coinomi desktop" />
                        </li>
                        <li class="col-6-12 left">
                            <h1 class="ae-2">Coinomi on desktop</h1>
                            <div class="accent sub ae-2 blue"></div>
                            <div class="ae-3">
                                <p class="hero">Desktop client is available on Windows, MacOS and Linux.</p>
                            </div>
                            <ul class="flex grid-61 later">
                                <li class="col-6-12 ae-4">
                                    <svg width="48" height="48"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-desktop"></use></svg>
                                    <h3>Desktop delight</h3>
                                    <p class="micro opacity-7">A sight for sore eyes! The same wallet you know and trust on your mobile, now on your desktop or laptop computer.</p>
                                </li>
                                <li class="col-6-12 ae-4">
                                    <svg width="48" height="48"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-sync"></use></svg>
                                    <h3>Perfectly in-sync</h3>
                                    <p class="micro opacity-7">Perfect harmony. Restore your mobile wallet and see all your transactions on your computer as well.</p>
                                </li>
                                <li class="col-6-12 ae-4">
                                    <svg width="48" height="48"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-security"></use></svg>
                                    <h3>Strong security</h3>
                                    <p class="micro opacity-7">Our desktop app uses the identical system logic used so successfully on our core mobile wallet.</p>
                                </li>
                                <li class="col-6-12 ae-4">
                                    <svg width="48" height="48"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#coinomi-dark"></use></svg>
                                    <h3>Mood modes</h3>
                                    <p class="micro opacity-7">Sitting in the office, or relaxing at home? Dark and Light modes are available to match your preference.</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="margin-top-6">
                        <a href="downloads/index.html" class="button black ae-3 fromCenter">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background gradient-color"></div>
</section>
<section class="slide whiteSlide autoHeight coinomi-footer exclude" data-title="Footer" data-parent-slide-id="4">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-12-12">
                    <ul class="grid fixedSpaces left">
                        <li class="col-2-10 col-tablet-1-1 padding-bottom-2 ae-1">
                            <a href="index.html#" class="logo"><svg width="120" height="50"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg></a>
                        </li>
                        <li class="col-2-10 col-tablet-1-2 col-phone-1-1 ae-2">
                            <h3 class="margin-bottom-1 text-orange">Company</h3>
                            <p class="micro"><a href="about/index.html">About us</a></p>
                            <p class="micro"><a href="careers/index.html">Careers</a></p>
                            <p class="micro"><a href="https://downloads.coinomi.com/files/Coinomi-Brand-Assets.zip">Brand Assets</a></p>
                            <p class="micro"><a href="contact/index.html">Contact</a></p>
                        </li>
                        <li class="col-2-10 col-tablet-1-2 col-phone-1-1 ae-3">
                            <h3 class="margin-bottom-1 text-teal">Community</h3>
                            <p class="micro"><a href="https://support.coinomi.com/" target="_blank" rel="noopener noreferrer">Help &amp; Support</a></p>
                            <p class="micro"><a href="listing/request/index.html">Get Listed</a></p>
                            <p class="micro"><a href="https://coinomi.github.io/tools/" target="_blank" rel="noopener noreferrer">Tools</a></p>
                            <p class="micro"><a href="https://medium.com/coinomi" target="_blank" rel="noopener noreferrer">Blog</a></p>
                            <p class="micro"><a href="https://www.youtube.com/channel/UC4tA_slGgx1O-aClJF_Ufjw/featured" target="_blank" rel="noopener noreferrer">YouTube</a></p>
                            <p class="micro"><a href="https://github.com/coinomi/" target="_blank" rel="noopener noreferrer">Github</a></p>
                            <p class="micro"><a href="https://www.linkedin.com/company/coinomi/" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                        </li>
                        <li class="col-2-10 col-tablet-1-2 col-phone-1-1 ae-4">
                            <h3 class="margin-bottom-1 text-purple">Social</h3>
                            <p class="micro"><a href="https://twitter.com/coinomiwallet" target="_blank" rel="noopener noreferrer">Twitter</a></p>
                            <p class="micro"><a href="https://t.me/coinomi_official" target="_blank" rel="noopener noreferrer">Telegram</a></p>
                            <p class="micro"><a href="https://www.reddit.com/r/COINOMI/" target="_blank" rel="noopener noreferrer">Reddit</a></p>
                            <p class="micro"><a href="https://www.facebook.com/coinomi/" target="_blank" rel="noopener noreferrer">Facebook</a></p>
                            <p class="micro"><a href="https://www.instagram.com/coinomiofficial/" target="_blank" rel="noopener noreferrer">Instagram</a></p>
                        </li>
                        <li class="col-2-10 col-tablet-1-2 col-phone-1-1 ae-5">
                            <h3 class="margin-bottom-1 text-blue"><a href="https://www.coinomi.com/downloads/">Downloads</a></h3>
                            <p class="micro"><a href="https://play.google.com/store/apps/details?id=com.coinomi.wallet" target="_blank" rel="noopener noreferrer">Android</a></p>
                            <p class="micro"><a href="https://itunes.apple.com/app/coinomi-wallet/id1333588809" target="_blank" rel="noopener noreferrer">iOS</a></p>
                            <p class="micro"><a href="https://www.coinomi.com/downloads/">Windows</a></p>
                            <p class="micro"><a href="https://www.coinomi.com/downloads/">macOS</a></p>
                            <p class="micro"><a href="https://www.coinomi.com/downloads/">Linux</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
