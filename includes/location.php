<?php
$countries = [
    'DRC' => ['code' => 'CD', 'region' => 'central'],
    'Zambia' => ['code' => 'ZM', 'region' => 'south'],
    'Rwanda' => ['code' => 'RW', 'region' => 'east'],
    'Kenya' => ['code' => 'KE', 'region' => 'east'],
    'Tanzania' => ['code' => 'TZ', 'region' => 'east'],
    'Uganda' => ['code' => 'UG', 'region' => 'east'],
    'Malawi' => ['code' => 'MW', 'region' => 'south'],
    'Zimbabwe' => ['code' => 'ZW', 'region' => 'south'],
    'Mozambique' => ['code' => 'MZ', 'region' => 'south'],
    'South Africa' => ['code' => 'ZA', 'region' => 'south'],
];
?>

<div class="container-fluid coverage-section py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-xxl-10">
            <div class="title-container text-center mb-4">
                <div class="badge-container">
                    <span class="coverage-badge">10 Countries</span>
                    <span class="coverage-badge">Regional Leader</span>
                </div>
                <h2 class="section-title gradient-text">Strategic African Coverage</h2>
                <p class="lead animated-text">
                    Sabmeith Freight dominates key logistics corridors across Eastern and Southern Africa.
                </p>
            </div>
            
            <!-- Interactive Region Tabs -->
            <div class="region-tabs">
                <?php foreach (['all' => 'All Countries', 'east' => 'East Africa', 'central' => 'Central Africa', 'south' => 'Southern Africa'] as $region => $label) : ?>
                <button class="region-tab <?= $region === 'all' ? 'active' : '' ?>" data-region="<?= $region ?>">
                    <?= $label ?>
                </button>
                <?php endforeach; ?>
            </div>

            <div class="row px-md-3">
                <!-- Map Visual Section - Simplified -->
                <div class="col-lg-5 mb-4">
                    <div class="africa-map-container">
                        <img src="img/location.png" alt="Sabmeith Freight African Operations" class="img-fluid africa-map">
                    </div>
                </div>
                
                <!-- Country Grid Section -->
                <div class="col-lg-7">
                    <div class="row country-row">
                        <?php foreach ($countries as $name => $data) : ?>
                        <div class="col-6 col-md-4 col-lg country-column mb-3" data-region="<?= $data['region'] ?>">
                            <div class="country-card">
                                <div class="card-content">
                                    <div class="country-header">
                                        <h4><?= $name ?> <span class="country-code"><?= $data['code'] ?></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Convincing description before CTA -->
                    <div class="value-proposition my-4">
                        <div class="value-card">
                            <h4 class="value-title">Why Choose Sabmeith Freight</h4>
                            <div class="value-content">
                                <div class="value-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Specialized in critical mining logistics and hazardous material transport</span>
                                </div>
                                <div class="value-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Seamless cross-border solutions with dedicated customs expertise</span>
                                </div>
                                <div class="value-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Real-time shipment tracking and 24/7 operational support</span>
                                </div>
                                <div class="value-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>GCLA certified for handling mining reagents and chemicals</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Section -->
                    <div class="cta-container mt-3">
                        <div class="cta-buttons">
                            <a href="contact.php" class="btn-primary">Request Quote</a>
                            <a href="https://wa.me/255752727272" class="btn-outline">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Creative yet Space-Efficient Styling */
.coverage-section {
    --primary: #d11a2a;
    --primary-light: rgba(209, 26, 42, 0.2);
    --primary-glow: rgba(209, 26, 42, 0.5);
    --dark-bg: #0a0a14;
    --card-bg: rgba(255, 255, 255, 0.03);
    --text: #fff;
    
    background-color: var(--dark-bg);
    background-image: radial-gradient(circle at 10% 20%, rgba(114, 28, 36, 0.05) 0%, transparent 30%),
        radial-gradient(circle at 90% 80%, rgba(30, 30, 60, 0.1) 0%, transparent 40%);
    color: var(--text);
    position: relative;
    overflow: hidden;
    padding: 3rem 0;
}

/* Title Styling */
.badge-container {
    margin-bottom: 10px;
}

.coverage-badge {
    display: inline-block;
    background-color: rgba(209, 26, 42, 0.1);
    color: var(--primary);
    font-size: 0.8rem;
    padding: 4px 12px;
    border-radius: 20px;
    margin-right: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.gradient-text {
    font-weight: 800;
    background: linear-gradient(90deg, #fff, var(--primary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    position: relative;
    padding-bottom: 15px;
    display: inline-block;
}

.gradient-text:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary), rgba(209,26,42,0.3));
    border-radius: 2px;
}

/* Interactive Region Tabs */
.region-tabs {
    display: flex;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    margin-bottom: 20px;
    justify-content: center;
}

.region-tab {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.7);
    padding: 10px 15px;
    cursor: pointer;
    position: relative;
    transition: all 0.3s ease;
}

.region-tab.active {
    color: #fff;
}

.region-tab.active:after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: var(--primary);
}

/* Africa Map Container */
.africa-map-container {
    position: relative;
    width: 100%;
    max-width: 400px; /* Control maximum width */
    margin: 0 auto; /* Center the container */
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.africa-map {
    width: 100%;
    border-radius: 10px;
}

/* Country Grid Layout */
.country-row {
    margin-right: -5px;
    margin-left: -5px;
}

.country-column {
    padding: 0 5px;
}

/* Country Cards */
.country-card {
    background-color: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    padding: 15px;
    height: 100%;
    transition: all 0.2s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.country-card:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.country-header h4 {
    font-size: 0.9rem;
    font-weight: 600;
    margin: 0;
    color: #fff;
}

.country-code {
    font-size: 0.75rem;
    opacity: 0.6;
    text-transform: uppercase;
    color: #fff;
}

/* Value Proposition Styling */
.value-proposition {
    background: linear-gradient(135deg, rgba(17, 17, 25, 0.7), rgba(10, 10, 20, 0.7));
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.value-title {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--primary);
    position: relative;
    padding-bottom: 0.5rem;
}

.value-title:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
    background-color: var(--primary);
}

.value-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.value-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 0.5rem;
}

.value-item i {
    color: var(--primary);
    margin-right: 0.5rem;
    margin-top: 0.2rem;
}

.value-item span {
    font-size: 0.9rem;
    line-height: 1.4;
}

/* CTA Section */
.cta-container {
    margin-top: 1.5rem;
    padding: 1rem;
    background: linear-gradient(135deg, rgba(209, 26, 42, 0.1), rgba(40, 40, 70, 0.1));
    border-radius: 8px;
    text-align: center;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.btn-primary {
    background: var(--primary);
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.btn-outline {
    background: transparent;
    color: white;
    border: 1px solid var(--primary);
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.btn-primary:hover, .btn-outline:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(209, 26, 42, 0.3);
}

/* Responsive Adjustments */
@media (min-width: 992px) {
    .country-column {
        flex: 0 0 20%;
        max-width: 20%;
    }
}

@media (max-width: 991.98px) {
    .region-tab {
        padding: 8px 12px;
        font-size: 0.85rem;
    }
    
    .country-column {
        flex: 0 0 25%;
        max-width: 25%;
    }
    
    .value-content {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 767.98px) {
    .region-tabs {
        flex-wrap: wrap;
    }
    
    .country-column {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }
}

@media (max-width: 575.98px) {
    .country-column {
        flex: 0 0 50%;
        max-width: 50%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Region Tab Filtering
    const regionTabs = document.querySelectorAll('.region-tab');
    
    regionTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            regionTabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Get selected region
            const selectedRegion = this.getAttribute('data-region');
            
            // Filter country cards
            document.querySelectorAll('.country-column').forEach(item => {
                const region = item.getAttribute('data-region');
                               
                if (selectedRegion === 'all' || region === selectedRegion) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
