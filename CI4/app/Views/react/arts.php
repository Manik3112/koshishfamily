<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    .artistic-heading {
        position: relative;
        display: inline-block;
    }
    .artistic-heading::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #f59e0b, #d97706, #f59e0b);
        transform: scaleX(0);
        transform-origin: left;
        animation: brushStroke 1s ease-out forwards;
    }
    @keyframes brushStroke {
        to { transform: scaleX(1); }
    }
    .pattern-bg {
        background-color: #fff;
        background-image: radial-gradient(#f59e0b 0.5px, transparent 0.5px), radial-gradient(#f59e0b 0.5px, #fff 0.5px);
        background-size: 20px 20px;
        background-position: 0 0, 10px 10px;
        opacity: 0.1;
    }
    .program-card {
        transition: all 0.4s ease-in-out;
        position: relative;
        overflow: hidden;
    }
    .program-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.1));
        transform: translateY(100%);
        transition: transform 0.4s ease-in-out;
    }
    .program-card:hover {
        transform: translateY(-10px);
    }
    .program-card:hover::before {
        transform: translateY(0);
    }
    .fade-in {
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .paint-splash {
        position: relative;
        overflow: hidden;
    }
    .paint-splash::before {
        content: '';
        position: absolute;
        width: 200%;
        height: 200%;
    }
    .paint-splash::before {
        top: -50%;
        left: -50%;
        background: radial-gradient(circle at center, 
            rgba(245, 158, 11, 0.8) 0%,
            rgba(217, 119, 6, 0.6) 30%,
            rgba(245, 158, 11, 0.4) 60%,
            transparent 70%
        );
        animation: rotate 20s linear infinite;
    }
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        cursor: pointer;
    }
    .gallery-item img {
        transition: all 0.5s ease-in-out;
    }
    .gallery-item:hover img {
        transform: scale(1.1) rotate(2deg);
    }
    .gallery-overlay {
        background: linear-gradient(to top,
            rgba(0, 0, 0, 0.8) 0%,
            rgba(0, 0, 0, 0.4) 60%,
            transparent 100%
        );
        transform: translateY(100%);
        transition: transform 0.5s ease-in-out;
    }
    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }
    .creative-button {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .creative-button::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 60%);
        transform: translate(-50%, -50%) scale(0);
        transition: transform 0.6s ease-out;
    }
    .creative-button:hover::before {
        transform: translate(-50%, -50%) scale(1);
    }
    .floating {
        animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
</style>

<script type="text/babel">
    const App = () => {
        const artworks = [
            { src: "/images/portfolio/portfolio-1.jpg", title: "Traditional Art" },
            { src: "/images/portfolio/portfolio-2.jpg", title: "Modern Crafts" },
            { src: "/images/portfolio/portfolio-3.jpg", title: "Creative Expression" },
            { src: "/images/portfolio/portfolio-4.jpg", title: "Cultural Art" },
            { src: "/images/portfolio/portfolio-5.jpg", title: "Contemporary Design" },
            { src: "/images/portfolio/portfolio-6.jpg", title: "Innovative Crafts" }
        ];

        return (
            <div>
                <div className="paint-splash text-white py-24 px-4 mb-12 relative">
                    <div className="container mx-auto text-center">
                        <h1 className="text-5xl font-bold mb-6 fade-in">Arts & Crafts</h1>
                        <p className="text-2xl mb-8 fade-in" style={{animationDelay: '0.3s'}}>
                            Unleashing Creativity, Inspiring Minds
                        </p>
                        <button className="creative-button bg-white text-amber-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition fade-in" style={{animationDelay: '0.6s'}}>
                            Explore Gallery
                        </button>
                    </div>
                </div>

                <div className="container mx-auto px-4">

                <section className="mb-16">
                    <div className="grid md:grid-cols-2 gap-12 items-center">
                        <div className="space-y-6">
                            <h2 className="artistic-heading text-3xl font-bold text-gray-800 fade-in">Creative Expression</h2>
                            <p className="text-lg text-gray-600 fade-in" style={{animationDelay: '0.3s'}}>
                                Our Arts & Crafts department is a vibrant hub of creativity where traditional 
                                techniques meet modern expression. We provide a platform for artists to explore 
                                their creativity while preserving cultural heritage through various art forms.
                            </p>
                            <div className="bg-amber-50 p-6 rounded-xl shadow-md fade-in" style={{animationDelay: '0.6s'}}>
                                <h3 className="text-xl font-bold mb-4">Art Forms We Explore</h3>
                                <ul className="grid grid-cols-2 gap-4 text-gray-600">
                                    <li className="flex items-center">
                                        <i className="fas fa-palette text-amber-600 mr-3"></i>
                                        Painting
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-hands text-amber-600 mr-3"></i>
                                        Handicrafts
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-pencil-alt text-amber-600 mr-3"></i>
                                        Sketching
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-theater-masks text-amber-600 mr-3"></i>
                                        Folk Art
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-camera text-amber-600 mr-3"></i>
                                        Photography
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-desktop text-amber-600 mr-3"></i>
                                        Digital Art
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <img 
                                src="/images/arts/intro-section-illustration.png" 
                                alt="Creative Arts" 
                                className="rounded-xl shadow-xl floating"
                            />
                        </div>
                    </div>
                </section>

                <section className="mb-16">
                    <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Gallery</h2>
                    <div className="grid md:grid-cols-3 gap-6">
                        {artworks.map((image, index) => (
                            <div key={index} className="gallery-item shadow-lg">
                                <img 
                                    src={image.src} 
                                    alt={image.title}
                                    className="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
                                />
                                <div className="gallery-overlay absolute inset-0 flex items-center justify-center p-6">
                                    <div className="text-center">
                                        <h3 className="text-white text-2xl font-bold mb-2">{image.title}</h3>
                                        <p className="text-white text-sm opacity-80">Click to view details</p>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </section>

                <section className="bg-amber-50 rounded-xl p-12 mb-16 relative overflow-hidden">
                    <div className="pattern-bg absolute inset-0"></div>
                    <div className="relative z-10">
                        <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Programs</h2>
                        <div className="grid md:grid-cols-3 gap-8">
                            <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                                <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i className="fas fa-paint-brush text-2xl text-amber-600"></i>
                                </div>
                                <h3 className="text-xl font-bold mb-4">Art Workshops</h3>
                                <p className="text-gray-600">Regular workshops conducted by experienced artists</p>
                            </div>
                            <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                                <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i className="fas fa-image text-2xl text-amber-600"></i>
                                </div>
                                <h3 className="text-xl font-bold mb-4">Exhibition Space</h3>
                                <p className="text-gray-600">Platform to showcase artistic creations</p>
                            </div>
                            <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                                <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <i className="fas fa-music text-2xl text-amber-600"></i>
                                </div>
                                <h3 className="text-xl font-bold mb-4">Cultural Events</h3>
                                <p className="text-gray-600">Celebrating art through cultural programs</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="text-center mb-16 max-w-4xl mx-auto">
                    <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-6 fade-in">Join Our Creative Community</h2>
                    <p className="text-xl text-gray-600 mb-8 fade-in" style={{animationDelay: '0.3s'}}>
                        Whether you're an experienced artist or just beginning your creative journey, 
                        our doors are open to all who wish to explore the world of arts and crafts.
                    </p>
                    <button className="creative-button bg-amber-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-amber-700 transition fade-in" style={{animationDelay: '0.6s'}}>
                        Join Now
                    </button>
                </section>
                </div>
            </div>
        );
        };
</script>
