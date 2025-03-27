
    <style>
        .target-market-section {
            background-color: #3F1E26;
            padding: 60px 0;
            color: white;
        }
        
        .section-title {
            margin-bottom: 40px;

        }
        
        .section-title h2 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: white;
            position: relative;
            text-align: center;
        }
        
        .section-title h2:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: white;
            margin-top: 15px;
        }
        
        .market-card {
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
            height: 200px;
            cursor: pointer;
        }
        
        .market-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .market-title {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(59, 30, 38, 0.85);
            color: white;
            padding: 10px 15px;
            font-weight: 600;
            z-index: 2;
            font-size: 20px;
        }
        
        .market-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(59, 30, 38, 0.9);
            padding: 15px;
            color: white;
            transform: translateY(100%);
            transition: transform 0.5s ease;
            overflow-y: auto;
            font-size: 1rem;
            z-index: 1;
        }
        
        .market-card:hover .market-content {
            transform: translateY(0);
        }
        
        .market-card:hover .market-image {
            transform: scale(1.1);
        }
        
        /* Custom scrollbar for content */
        .market-content::-webkit-scrollbar {
            width: 5px;
        }
        
        .market-content::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .market-card {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <section class="target-market-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Target<br>Market</h2>
            </div>
            
            <div class="row">
                <!-- Energy and Mining -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/mining.jpg" class="market-image">
                        <div class="market-title">Energy and Mining</div>
                        <div class="market-content">
                            <p>Sabmeith Freight Limited provides logistics
                                support for the energy and mining sectors,
                                facilitating the transportation of raw materials,
                                equipment, and supplies to remote exploration
                                sites and production facilities
                                .</p>
                        </div>
                    </div>
                </div>
                
                <!-- Construction -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/construction.jpg" alt="Construction" class="market-image">
                        <div class="market-title">Construction</div>
                        <div class="market-content">
                            <p>Sabmeith Freight Limited supports construction
                                companies with logistics services for the
                                transportation of construction materials,
                                equipment, and machinery. </p>
                        </div>
                    </div>
                </div>
                
                <!-- Manufacturing -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/manufacturing.jpg" alt="Manufacturing" class="market-image">
                        <div class="market-title">Manufacturing</div>
                        <div class="market-content">
                            <p>Sabmeith Freight Limited provides tailored
                                logistics solutions for manufacturing businesses,
                                facilitating the seamless movement of raw
                                materials, components, and finished goods
                                throughout the production process.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Retail -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/retail.jpg" alt="Retail" class="market-image">
                        <div class="market-title">Retail</div>
                        <div class="market-content">
                            <p>As a trusted logistics partner for retail
                                businesses, Sabmeith Freight Limited offers
                                comprehensive services including inventory
                                management, warehousing, and last-mile
                                delivery.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Automotive -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/auto.jpg" alt="Automotive" class="market-image">
                        <div class="market-title">Automotive</div>
                        <div class="market-content">
                            <p>Sabmeith Freight Limited offers specialized
                                    logistics services for the automotive industry,
                                    including the transportation of vehicles, parts,
                                    and components.</p>
                        </div>
                    </div>
                </div>
                
                <!-- E-commerce -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/ecommerce.png" alt="E-commerce" class="market-image">
                        <div class="market-title">E-commerce</div>
                        <div class="market-content">
                            <p>Sabmeith Freight Limited specializes in providing
                                end-to-end logistics solutions for e-commerce
                                companies, handling everything from order
                                fulfillment and packaging to shipping and
                                delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>