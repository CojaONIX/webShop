
INSERT INTO admins
VALUES
    (null, "demo", MD5("demo"));

INSERT INTO users
VALUES 
    (null, "Darko", MD5(123456), "email1@gmail.com"),
    (null, "Milan", MD5(123456), "email2@gmail.com"),
    (null, "Goran", MD5(123456), "email3@gmail.com");

INSERT INTO main_categories
VALUES 
    (null, "Computers", null, null),
    (null, "Electronics", null, null),
    (null, "Apparel", null, null),
    (null, "Other", null, null);

INSERT INTO categories
VALUES 
    (null, "Desktops", null, null, null, 1),
    (null, "Notebooks", null, null, null, 1),
    (null, "Software", null, null, null, 1),
    (null, "Camera & photo", null, null, null, 2),
    (null, "Cell phones", null, null, null, 2),
    (null, "Others", null, null, null, 2),
    (null, "Shoes", null, null, null, 3),
    (null, "Clothing", null, null, null, 3),
    (null, "Accessories", null, null, null, 3),
    (null, "Digital Downloads", null, null, null, 4),
    (null, "Books", null, null, null, 4),
    (null, "Jewelry", null, null, null, 4),
    (null, "Gift Cards", null, null, null, 4);

INSERT INTO products
VALUES 
    (1, 'Build your own computer', 'Build it', 'Fight back against cluttered workspaces with the stylish IBM zBC12 All-in-One desktop PC featuring powerful computing resources and a stunning 20.1-inch widescreen display with stunning XBRITE-HiColor LCD technology. The black IBM zBC12 has a built-in microphone and MOTION EYE camera with face-tracking technology that allows for easy communication with friends and family. And it has a built-in DVD burner and Sonys Movie Store software so you can create a digital entertainment library for personal viewing at your convenience. Easy to setup and even easier to use this JS-series All-in-One includes an elegantly designed keyboard and a USB mouse.', 10000, 1200, 0, true, 1),
    (2, 'Digital Storm VANQUISH 3 Custom Performance PC', 'Digital Storm Vanquish 3 Desktop PC', 'Blow the doors off today’s most demanding games with maximum detail speed and power for an immersive gaming experience without breaking the bank.Stay ahead of the competition VANQUISH 3 is fully equipped to easily handle future upgrades keeping your system on the cutting edge for years to come.Each system is put through an extensive stress test ensuring you experience zero bottlenecks and get the maximum performance from your hardware.', 10000, 1259, 0, false, 1),
    (3, 'Lenovo IdeaCentre 600 All-in-One PC', '', 'The A600 features a 21.5in screen DVD or optional Blu-Ray drive support for the full beans 1920 x 1080 HD Dolby Home Cinema certification and an optional hybrid analogue/digital TV tuner.Connectivity is handled by 802.11a/b/g - 802.11n is optional - and an ethernet port. You also get four USB ports a Firewire slot a six-in-one card reader and a 1.3- or two-megapixel webcam.', 10000, 500, 0, false, 1),
    (4, 'Apple MacBook Pro 13-inch', 'A groundbreaking Retina display. A new force-sensing trackpad. All-flash architecture. Powerful dual-core and quad-core Intel processors. Together these features take the notebook to a new level of performance. And they will do the same for you in everything you create.', 'With fifth-generation Intel Core processors the latest graphics and faster flash storage the incredibly advanced MacBook Pro with Retina display moves even further ahead in performance and battery life.* *Compared with the previous generation.Retina display with 2560-by-1600 resolutionFifth-generation dual-core Intel Core i5 processorIntel Iris GraphicsUp to 9 hours of battery life1Faster flash storage2802.11ac Wi-FiTwo Thunderbolt 2 ports for connecting high-performance devices and transferring data at lightning speedTwo USB 3 ports (compatible with USB 2 devices) and HDMIFaceTime HD cameraPages Numbers Keynote iPhoto iMovie GarageBand includedOS X the worlds most advanced desktop operating system', 10000, 1800, 0, true, 1),
    (5, 'Asus N551JK-XO076H Laptop', 'Laptop Asus N551JK Intel Core i7-4710HQ 2.5 GHz RAM 16GB HDD 1TB Video NVidia GTX 850M 4GB BluRay 15.6 Full HD Win 8.1', 'The ASUS N550JX combines cutting-edge audio and visual technology to deliver an unsurpassed multimedia experience. A full HD wide-view IPS panel is tailor-made for watching movies and the intuitive touchscreen makes for easy seamless navigation. ASUS has paired the N550JX’s impressive display with SonicMaster Premium co-developed with Bang & Olufsen ICEpower® audio experts for true surround sound. A quad-speaker array and external subwoofer combine for distinct vocals and a low bass that you can feel.', 10000, 1500, 0, false, 2),
    (6, 'Samsung Series 9 NP900X4C Premium Ultrabook', 'Samsung Series 9 NP900X4C-A06US 15-Inch Ultrabook (1.70 GHz Intel Core i5-3317U Processor 8GB DDR3 128GB SSD Windows 8) Ash Black', 'Designed with mobility in mind Samsungs durable ultra premium lightweight Series 9 laptop (model NP900X4C-A01US) offers mobile professionals and power users a sophisticated laptop equally suited for work and entertainment. Featuring a minimalist look that is both simple and sophisticated its polished aluminum uni-body design offers an iconic look and feel that pushes the envelope with an edge just 0.58 inches thin. This Series 9 laptop also includes a brilliant 15-inch SuperBright Plus display with HD+ technology 128 GB Solid State Drive (SSD) 8 GB of system memory and up to 10 hours of battery life.', 10000, 1590, 0, true, 2),
    (7, 'HP Spectre XT Pro UltraBook', 'HP Spectre XT Pro UltraBook / Intel Core i5-2467M / 13.3 / 4GB / 128GB / Windows 7 Professional / Laptop', 'Introducing HP ENVY Spectre XT the Ultrabook designed for those who want style without sacrificing substance. Its sleek. Its thin. And with Intel. Corer i5 processor and premium materials its designed to go anywhere from the bistro to the boardroom its unlike anything youve ever seen from HP.', 10000, 1350, 0, false, 2),
    (8, 'HP Envy 6-1180ca 15.6-Inch Sleekbook', 'HP ENVY 6-1202ea Ultrabook Beats Audio 3rd generation Intel® CoreTM i7-3517U processor 8GB RAM 500GB HDD Microsoft Windows 8 AMD Radeon HD 8750M (2 GB DDR3 dedicated)', 'The UltrabookTM thats up for anything. Thin and light the HP ENVY is the large screen UltrabookTM with Beats AudioTM. With a soft-touch base that makes it easy to grab and go its a laptop thats up for anything.<br /><br /><b>Features</b><br /><br />- Windows 8 or other operating systems available<br /><br /><b>Top performance. Stylish design. Take notice.</b><br /><br />- At just 19.8 mm (0.78 in) thin the HP ENVY UltrabookTM is slim and light enough to take anywhere. Its the laptop that gets you noticed with the power to get it done.<br />- With an eye-catching metal design its a laptop that you want to carry with you. The soft-touch slip-resistant base gives you the confidence to carry it with ease.<br /><br /><b>More entertaining. More gaming. More fun.</b><br /><br />- Own the UltrabookTM with Beats AudioTM dual speakers a subwoofer and an awesome display. Your music movies and photo slideshows will always look and sound their best.<br />- Tons of video memory let you experience incredible gaming and multimedia without slowing down. Create and edit videos in a flash. And enjoy more of what you love to the fullest.<br />- The HP ENVY UltrabookTM is loaded with the ports youd expect on a world-class laptop but on a Sleekbook instead. Like HDMI USB RJ-45 and a headphone jack. You get all the right connections without compromising size.<br /><br /><b>Only from HP.</b><br /><br />- Life heats up. Thats why theres HP CoolSense technology which automatically adjusts your notebooks temperature based on usage and conditions. It stays cool. You stay comfortable.<br />- With HP ProtectSmart your notebooks data stays safe from accidental bumps and bruises. It senses motion and plans ahead stopping your hard drive and protecting your entire digital life.<br />- Keep playing even in dimly lit rooms or on red eye flights. The optional backlit keyboard[1] is full-size so you dont compromise comfort. Backlit keyboard. Another bright idea.<br /><br />', 10000, 1460, 0, false, 2),
    (9, 'Lenovo Thinkpad X1 Carbon Laptop', 'Lenovo Thinkpad X1 Carbon Touch Intel Core i7 14 Ultrabook', 'The X1 Carbon brings a new level of quality to the ThinkPad legacy of high standards and innovation. It starts with the durable carbon fiber-reinforced roll cage making for the best Ultrabook construction available and adds a host of other new features on top of the old favorites. Because for 20 years we havent stopped innovating. And you shouldnt stop benefiting from that.', 10000, 1360, 0, false, 2),
    (10, 'Adobe Photoshop CS4', 'Easily find and view all your photos', 'Adobe Photoshop CS4 software combines power and simplicity so you can make ordinary photos extraordinary; tell engaging stories in beautiful personalized creations for print and web; and easily find and view all your photos. New Photoshop.com membership* works with Photoshop CS4 so you can protect your photos with automatic online backup and 2 GB of storage; view your photos anywhere you are; and share your photos in fun interactive ways with invitation-only Online Albums.', 10000, 75, 0, false, 3),
    (11, 'Windows 8 Pro', 'Windows 8 is a Microsoft operating system that was released in 2012 as part of the companys Windows NT OS family. ', 'Windows 8 Pro is comparable to Windows 7 Professional and Ultimate and is targeted towards enthusiasts and business users; it includes all the features of Windows 8. Additional features include the ability to receive Remote Desktop connections the ability to participate in a Windows Server domain Encrypting File System Hyper-V and Virtual Hard Disk Booting Group Policy as well as BitLocker and BitLocker To Go. Windows Media Center functionality is available only for Windows 8 Pro as a separate software package.', 10000, 65, 0, false, 3),
    (12, 'Sound Forge Pro 11 (recurring)', 'Advanced audio waveform editor.', 'Sound Forge™ Pro is the application of choice for a generation of creative and prolific artists producers and editors. Record audio quickly on a rock-solid platform address sophisticated audio processing tasks with surgical precision and render top-notch master files with ease. New features include one-touch recording metering for the new critical standards more repair and restoration tools and exclusive round-trip interoperability with SpectraLayers Pro. Taken together these enhancements make this edition of Sound Forge Pro the deepest and most advanced audio editing platform available.', 10000, 54.99, 0, false, 3),
    (13, 'Nikon D5500 DSLR', 'Slim lightweight Nikon D5500 packs a vari-angle touchscreen', 'Nikon has announced its latest DSLR the D5500. A lightweight compact DX-format camera with a 24.2MP sensor it’s the first of its type to offer a vari-angle touchscreen. The D5500 replaces the D5300 in Nikon’s range and while it offers much the same features the company says it’s a much slimmer and lighter prospect. There’s a deep grip for easier handling and built-in Wi-Fi that lets you transfer and share shots via your phone or tablet.', 10000, 670, 0, false, 4),
    (14, 'Nikon D5500 DSLR - Black', 'NULL', 'NULL', 10000, 670, 0, false, 4),
    (15, 'Nikon D5500 DSLR - Red', 'NULL', 'NULL', 10000, 630, 0, false, 4),
    (16, 'Leica T Mirrorless Digital Camera', 'Leica T (Typ 701) Silver', 'The new Leica T offers a minimalist design thats crafted from a single block of aluminum.  Made in Germany and assembled by hand this 16.3 effective mega pixel camera is easy to use.  With a massive 3.7 TFT LCD intuitive touch screen control the user is able to configure and save their own menu system.  The Leica T has outstanding image quality and also has 16GB of built in memory.  This is Leicas first system camera to use Wi-Fi.  Add the T-App to your portable iOS device and be able to transfer and share your images (free download from the Apple App Store)', 10000, 530, 0, false, 4),
    (17, 'Apple iCam', 'Photography becomes smart', 'A few months ago we featured the amazing WVIL camera by many considered the future of digital photography. This is another very good looking concept iCam is the vision of Italian designer Antonio DeRosa the idea is to have a device that attaches to the iPhone 5 which then allows the user to have a camera with interchangeable lenses. The device would also feature a front-touch screen and a projector. Would be great if apple picked up on this and made it reality.', 10000, 1300, 0, false, 4),
    (18, 'HTC One M8 Android L 5.0 Lollipop', 'HTC - One (M8) 4G LTE Cell Phone with 32GB Memory - Gunmetal (Sprint)', '<b>HTC One (M8) Cell Phone for Sprint:</b> With its brushed-metal design and wrap-around unibody frame the HTC One (M8) is designed to fit beautifully in your hand. Its fun to use with amped up sound and a large Full HD touch screen and intuitive gesture controls make it seem like your phone almost knows what you need before you do. <br /><br />Sprint Easy Pay option available in store.', 10000, 245, 0, false, 5),
    (19, 'HTC One Mini Blue', 'HTC One and HTC One Mini now available in bright blue hue', 'HTC One mini smartphone with 4.30-inch 720x1280 display powered by 1.4GHz processor alongside 1GB RAM and 4-Ultrapixel rear camera.', 10000, 100, 0, false, 5),
    (20, 'Nokia Lumia 1020', 'Nokia Lumia 1020 4G Cell Phone (Unlocked)', 'Capture special moments for friends and family with this Nokia Lumia 1020 32GB WHITE cell phone that features an easy-to-use 41.0MP rear-facing camera and a 1.2MP front-facing camera. The AMOLED touch screen offers 768 x 1280 resolution for crisp visuals.', 10000, 349, 0, false, 5),
    (21, 'Beats Pill 2.0 Wireless Speaker', '<b>Pill 2.0 Portable Bluetooth Speaker (1-Piece):</b> Watch your favorite movies and listen to music with striking sound quality. This lightweight portable speaker is easy to take with you as you travel to any destination keeping you entertained wherever you are. ', '<ul><li>Pair and play with your Bluetooth® device with 30 foot range</li><li>Built-in speakerphone</li><li>7 hour rechargeable battery</li><li>Power your other devices with USB charge out</li><li>Tap two Beats Pills™ together for twice the sound with Beats Bond™</li></ul>', 10000, 79.99, 0, false, 6),
    (22, 'Universal 7-8 Inch Tablet Cover', 'Universal protection for 7-inch & 8-inch tablets', 'Made of durable polyurethane our Universal Cover is slim lightweight and strong with protective corners that stretch to hold most 7 and 8-inch tablets securely. This tough case helps protects your tablet from bumps scuffs and dings.', 10000, 39, 0, false, 6),
    (23, 'Portable Sound Speakers', 'Universall portable sound speakers', 'Your phone cut the cord now its time for you to set your music free and buy a Bluetooth speaker. Thankfully theres one suited for everyone out there.Some Bluetooth speakers excel at packing in as much functionality as the unit can handle while keeping the price down. Other speakers shuck excess functionality in favor of premium build materials instead. Whatever path you choose to go down youll be greeted with many options to suit your personal tastes.', 10000, 37, 0, false, 6),
    (24, 'Nike Floral Roshe Customized Running Shoes', 'When you ran across these shoes you will immediately fell in love and needed a pair of these customized beauties.', 'Each Rosh Run is personalized and exclusive handmade in our workshop Custom. Run Your Rosh creations born from the hand of an artist specialized in sneakers more than 10 years of experience.', 10000, 40, 0, false, 7),
    (25, 'adidas Consortium Campus 80s Running Shoes', 'adidas Consortium Campus 80s Primeknit Light Maroon/Running Shoes', 'One of three colorways of the adidas Consortium Campus 80s Primeknit set to drop alongside each other. This pair comes in light maroon and running white. Featuring a maroon-based primeknit upper with white accents. A limited release look out for these at select adidas Consortium accounts worldwide.', 10000, 27.56, 0, false, 7),
    (26, 'Nike SB Zoom Stefan Janoski Medium Mint', 'Nike SB Zoom Stefan Janoski Dark Grey Medium Mint Teal ...', 'The newly Nike SB Zoom Stefan Janoski gets hit with a Medium Mint accents that sits atop a Dark Grey suede. Expected to drop in October.', 10000, 30, 0, false, 7),
    (27, 'Nike Tailwind Loose Short-Sleeve Running Shirt', '', 'Boost your adrenaline with the Nike® Womens Tailwind Running Shirt. The lightweight slouchy fit is great for layering and moisture-wicking fabrics keep you feeling at your best. This tee has a notched hem for an enhanced range of motion while flat seams with reinforcement tape lessen discomfort and irritation over longer distances. Put your keys and card in the side zip pocket and take off in your Nike® running t-shirt.', 10000, 15, 0, false, 8),
    (28, 'Oversized Women T-Shirt', '', 'This oversized women t-Shirt needs minimum ironing. It is a great product at a great value!', 10000, 24, 0, false, 8),
    (29, 'Custom T-Shirt', 'T-Shirt - Add Your Content', 'Comfort comes in all shapes and forms yet this tee out does it all. Rising above the rest our classic cotton crew provides the simple practicality you need to make it through the day. Tag-free relaxed fit wears well under dress shirts or stands alone in laid-back style. Reinforced collar and lightweight feel give way to long-lasting shape and breathability. One less thing to worry about rely on this tee to provide comfort and ease with every wear.', 10000, 15, 0, false, 8),
    (30, 'Levis 511 Jeans', 'Levis Faded Black 511 Jeans ', 'Between a skinny and straight fit our 511&trade; slim fit jeans are cut close without being too restricting. Slim throughout the thigh and leg opening for a long and lean look.<ul><li>Slouch1y at top; sits below the waist</li><li>Slim through the leg close at the thigh and straight to the ankle</li><li>Stretch for added comfort</li><li>Classic five-pocket styling</li><li>99% Cotton 1% Spandex 11.2 oz. - Imported</li></ul>', 10000, 43.5, 0, false, 8),
    (31, 'Obey Propaganda Hat', '', 'Printed poplin 5 panel camp hat with debossed leather patch and web closure', 10000, 30, 0, false, 9),
    (32, 'Reversible Horseferry Check Belt', 'Reversible belt in Horseferry check with smooth leather trim', 'Reversible belt in Horseferry check with smooth leather trimLeather lining polished metal buckle', 0, 45, 0, false, 9),
    (33, 'Ray Ban Aviator Sunglasses', 'Aviator sunglasses are one of the first widely popularized styles of modern day sunwear.', 'Since 1937 Ray-Ban can genuinely claim the title as the worlds leading sunglasses and optical eyewear brand. Combining the best of fashion and sports performance the Ray-Ban line of Sunglasses delivers a truly classic style that will have you looking great today and for years to come.', 10000, 25, 0, false, 9),
    (34, 'Night Visions', 'Night Visions is the debut studio album by American rock band Imagine Dragons.', 'Original Release Date: September 4 2012Release Date: September 4 2012Genre - Alternative rock indie rock electronic rockLabel - Interscope/KIDinaKORNERCopyright: (C) 2011 Interscope Records', 10000, 2.8, 0, false, 10),
    (35, 'If You Wait (donation)', 'If You Wait is the debut studio album by English indie pop band London Grammar', 'Original Release Date: September 6 2013Genre - Electronica dream pop downtempo popLabel - Metal & Dust/Ministry of SoundProducer - Tim Bran Roy Kerr London GrammarLength - 43:22', 10000, 0, 0, false, 10),
    (36, 'Science & Faith', 'Science & Faith is the second studio album by Irish pop rock band The Script.', '# Original Release Date: September 10 2010<br /># Label: RCA Epic/Phonogenic(America)<br /># Copyright: 2010 RCA Records.', 10000, 0, 0, false, 10),
    (37, 'Fahrenheit 451 by Ray Bradbury', 'Fahrenheit 451 is a dystopian novel by Ray Bradbury published in 1953. It is regarded as one of his best works.', 'The novel presents a future American society where books are outlawed and firemen burn any that are found. The title refers to the temperature that Bradbury understood to be the autoignition point of paper.', 10000, 27, 0, false, 11),
    (38, 'First Prize Pies', 'Allison Kave made pies as a hobby until one day her boyfriend convinced her to enter a Brooklyn pie-making contest. She won. In fact her pies were such a hit that she turned pro.', 'First Prize Pies a boutique made-to-order pie business that originated on New Yorks Lower East Side has become synonymous with tempting and unusual confections. For the home baker who is passionate about seasonal ingredients and loves a creative approach to recipes First Prize Pies serves up 52 weeks of seasonal and eclectic pastries in an interesting pie-a-week format. Clear instructions technical tips and creative encouragement guide novice bakers as well as pie mavens. With its nostalgia-evoking photos of homemade pies fresh out of the oven First Prize Pies will be as giftable as it is practical.', 10000, 51, 0, false, 11),
    (39, 'Pride and Prejudice', 'Pride and Prejudice is a novel of manners by Jane Austen first published in 1813.', 'Set in England in the early 19th century Pride and Prejudice tells the story of Mr and Mrs Bennets five unmarried daughters after the rich and eligible Mr Bingley and his status-conscious friend Mr Darcy have moved into their neighbourhood. While Bingley takes an immediate liking to the eldest Bennet daughter Jane Darcy has difficulty adapting to local society and repeatedly clashes with the second-eldest Bennet daughter Elizabeth.', 10000, 24, 0, false, 11),
    (40, 'Elegant Gemstone Necklace (rental)', 'Classic and elegant gemstone necklace now available in our store', 'For those who like jewelry creating their ownelegant jewelry from gemstone beads provides an economical way to incorporate genuine gemstones into your jewelry wardrobe. Manufacturers create beads from all kinds of precious gemstones and semi-precious gemstones which are available in bead shops craft stores and online marketplaces.', 10000, 30, 0, false, 12),
    (41, 'Flower Girl Bracelet', 'Personalised Flower Braceled', 'This is a great gift for your flower girl to wear on your wedding day. A delicate bracelet that is made with silver plated soldered cable chain gives this bracelet a dainty look for young wrist. A Swarovski heart shown in Rose hangs off a silver plated flower. Hanging alongside the heart is a silver plated heart charm with Flower Girl engraved on both sides. This is a great style for the younger flower girl.', 10000, 360, 0, false, 12),
    (42, 'Vintage Style Engagement Ring', '1.24 Carat (ctw) in 14K White Gold (Certified)', 'Dazzle her with this gleaming 14 karat white gold vintage proposal. A ravishing collection of 11 decadent diamonds come together to invigorate a superbly ornate gold shank. Total diamond weight on this antique style engagement ring equals 1 1/4 carat (ctw). Item includes diamond certificate.', 10000, 2100, 0, false, 12),
    (43, '$25 Virtual Gift Card', '$25 Gift Card. Gift Cards must be redeemed through our site Web site toward the purchase of eligible products.', 'Gift Cards must be redeemed through our site Web site toward the purchase of eligible products. Purchases are deducted from the GiftCard balance. Any unused balance will be placed in the recipients GiftCard account when redeemed. If an order exceeds the amount of the GiftCard the balance must be paid with a credit card or other available payment method.', 10000, 25, 0, false, 13),
    (44, '$50 Physical Gift Card', '$50 Gift Card. Gift Cards must be redeemed through our site Web site toward the purchase of eligible products.', 'Gift Cards must be redeemed through our site Web site toward the purchase of eligible products. Purchases are deducted from the GiftCard balance. Any unused balance will be placed in the recipients GiftCard account when redeemed. If an order exceeds the amount of the GiftCard the balance must be paid with a credit card or other available payment method.', 10000, 50, 0, false, 13),
    (45, '$100 Physical Gift Card', '$100 Gift Card. Gift Cards must be redeemed through our site Web site toward the purchase of eligible products.', 'Gift Cards must be redeemed through our site Web site toward the purchase of eligible products. Purchases are deducted from the GiftCard balance. Any unused balance will be placed in the recipients GiftCard account when redeemed. If an order exceeds the amount of the GiftCard the balance must be paid with a credit card or other available payment method.', 10000, 100, 0, false, 13);

