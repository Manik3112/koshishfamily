<!-- Include Header Component -->
<?php include(APPPATH . 'Views/react/components/DepartmentHeader.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    /* Modal animations */
    @keyframes modalFadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .modal-enter {
        animation: modalFadeIn 0.3s ease-out;
    }
    
    /* Modal scrollbar */
    .modal-content {
        scrollbar-width: thin;
        scrollbar-color: #f59e0b transparent;
    }
    
    .modal-content::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }
    
    .modal-content::-webkit-scrollbar-thumb {
        background-color: #f59e0b;
        border-radius: 3px;
    }
    
    .modal-content::-webkit-scrollbar-track {
        background: transparent;
    }
    
    /* Gallery item hover effect */
    .gallery-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .creativeimg img {
        height: 500px;
        width: min-content;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    @media (min-width: 768px) {
        .creativeimg img {
            height: 700px;
        }
    }

    @media (min-width: 992px) {
        .creativeimg img {
            height: 600px;
        }
    }

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
        to {
            transform: scaleX(1);
        }
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
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
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
                transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
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
                transparent 100%);
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
        background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 60%);
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
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }
</style>

<!--  spining bg to have images, and explore to have download portfolio pdf ka option. -->

<!--  -->

<script type="text/babel">
    const App = () => {
        const department = 'art-and-craft';
        const title = 'Art & Craft';
        
   // In your arts.php file, update the artworks array
const artworks = [
    { 
        id: 'candle',
        title: "Scented Candles", 
        description: "Hand-poured scented candles in various fragrances.",
        images: Array.from({length: 8}, (_, i) => `/images/anc/candle/${i+1}.jpeg`)
    },
    { 
        id: 'canvas',
        title: "Canvas Painting",
        description: "Beautiful hand-painted canvas artworks created by our talented artists.",
        images: Array.from({length: 9}, (_, i) => `/images/anc/canvas/${i+1}.jpeg`)
    },
    { 
        id: 'bookmarks',
        title: "Bookmarks", 
        description: "Handmade coasters with unique designs.",
        images: Array.from({length: 5}, (_, i) => `/images/anc/bookmarks/${i+1}.jpeg`)
    },
    { 
        id: 'magnets',
        title: "Fridge Magnets", 
        description: "Handcrafted decorative magnets for your refrigerator.",
        images: Array.from({length: 9}, (_, i) => `/images/anc/magnets/${i+1}.jpeg`)
    },
    { 
        id: 'lippan',
        title: "Lippan Art", 
        description: "Traditional Indian mud and mirror work art pieces.",
        images: Array.from({length: 5}, (_, i) => `/images/anc/lippan/${i+1}.jpeg`)
    },
    { 
        id: 'mandala',
        title: "Mandala Art", 
        description: "Intricate mandala designs created with precision and care.",
        images: Array.from({length: 4}, (_, i) => `/images/anc/mandala/${i+1}.jpeg`)
    }
];

        
        // State for modal
        const [selectedArtwork, setSelectedArtwork] = React.useState(null);
        const [currentImageIndex, setCurrentImageIndex] = React.useState(0);
        
        // Open modal with selected artwork
        const openModal = (artwork) => {
            try{
                console.log("artwork.images.length",artwork.images.length)
                if(artwork.images.length>0){
                    setSelectedArtwork(artwork);
                    setCurrentImageIndex(0);
                    document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                }
            }catch(e){
                console.log(e);
            }
        };
        
        // Close modal
        const closeModal = () => {
            setSelectedArtwork(null);
            document.body.style.overflow = 'auto'; // Re-enable scrolling
        };
        
        // Navigate between images
        const nextImage = () => {
            setCurrentImageIndex(prev => 
                prev === selectedArtwork.images.length - 1 ? 0 : prev + 1
            );
        };
        
        const prevImage = () => {
            setCurrentImageIndex(prev => 
                prev === 0 ? selectedArtwork.images.length - 1 : prev - 1
            );
        };
        
        // Close modal when clicking outside content
        const handleBackdropClick = (e) => {
            if (e.target === e.currentTarget) {
                closeModal();
            }
        };
        
        // Close modal on Escape key
        React.useEffect(() => {
            const handleEscape = (e) => {
                if (e.key === 'Escape' && selectedArtwork) {
                    closeModal();
                }
            };
            
            window.addEventListener('keydown', handleEscape);
            return () => window.removeEventListener('keydown', handleEscape);
        }, [selectedArtwork]);

        const [count,setcount]=React.useState(0)

        React.useEffect(()=>{
            const targetCount =1253;
            const increment = Math.ceil(targetCount / 100);
            
            if (count<targetCount){
                setTimeout(() => {
                   setcount(count+increment) 
                }, 50);
                
            }
        },[count])
        

        return (
            <div>
                <DepartmentHeader department={department} title={title} />
                  <div
                      className="text-white py-24 px-4 mb-12 relative"
                      style={{
                        backgroundImage: "url('images/event/event-4.jpeg')",
                        backgroundSize: "cover",
                        backgroundPosition: "center",
                      }}
                    >
                      {/* Overlay */}
                      <div
                        style={{
                          position: "absolute",
                          inset: 0,
                          backgroundColor: "rgba(0,0,0,0.7)", 
                          zIndex: 1,
                        }}
                      ></div>
                    
                      {/* Content */}
                      <div className="container mx-auto text-center relative z-10">
                        <h1 className="text-5xl font-bold mb-6">Art & Craft</h1>
                        <p className="text-2xl mb-8" style={{ animationDelay: "0.3s" }}>
                          Crafted with Care, Powered by Hope!
                        </p>
                        <button
                          className="creative-button bg-white text-amber-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition"
                          style={{ animationDelay: "0.6s" }}
                        >
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
                            The Art and Craft Department of Koshish is dedicated to nurturing creativity 
                            and self-expression through hands-on artistic activities. 
                            It focuses on engaging children in various art and craft-making sessions 
                            where they learn new skills while creating beautiful handmade products.
                            state somewhere that these are made by volunteers and kids.
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
                                        <i class="fas fa-sun text-amber-600 mr-3"></i>
                                        Mandala                                         
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fa-hand-sparkles text-amber-600 mr-3"></i>
                                        Lippan Art
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-desktop text-amber-600 mr-3"></i>
                                        Digital Art
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fa-solid fa-cog text-amber-600 mr-3"></i>
                                        Customizable products
                                    </li>
                                    <li className="flex items-center">
                                        <i className="fas fa-flask text-amber-600 mr-3"></i>
                                        Resin Art
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="creativeimg">
                            <img 
                                src="/images/arts/intro-section-illustration1.png" 
                                alt="Creative Arts" 
                                className="rounded-xl shadow-xl floating object-contain!"
                            />
                        </div>
                    </div>
                </section>

                <section className="mb-16">
                    <h2 className="artistic-heading text-4xl font-bold text-gray-800 mb-8 text-center fade-in">Our Gallery</h2>
                    <p className="font-bold text-gray-800 mb-6 text-center fade-in" style={{ fontSize: '2rem' }}> We have made 
                    {' '}<span style={{background: 'linear-gradient(90deg, #f59e0b, #d97706, #f59e0b)',WebkitBackgroundClip: 'text',color: 'transparent'}}>{count <= 1000 ? count : '1000+'}</span>{' '}
                     products since...</p>
                    <div className="grid md:grid-cols-3 gap-6">
                        {artworks.map((artwork, index) => (
                            <div 
                                key={artwork.id}
                                className="gallery-item shadow-lg cursor-pointer"
                                onClick={() => openModal(artwork)}
                            >
                                <img 
                                    src={artwork.images[0]} 
                                    alt={artwork.title}
                                    className="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
                                />
                                <div className="gallery-overlay absolute inset-0 flex items-center justify-center p-6">
                                    <div className="text-center">
                                        <h3 className="text-white text-2xl font-bold mb-2">{artwork.title}</h3>
                                        <p className="text-white text-sm opacity-80">Click to view details</p>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                    
                    {/* Modal */}
                    {selectedArtwork && (
                        <div 
                            className="fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4"
                            onClick={handleBackdropClick}
                        >
                            <div className="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] flex flex-col">
                                {/* Header */}
                                <div className="flex justify-between items-center p-4 border-b">
                                    <h3 className="text-xl font-bold">{selectedArtwork.title}</h3>
                                    <button 
                                        onClick={closeModal}
                                        className="text-gray-500 hover:text-gray-700"
                                        aria-label="Close modal"
                                    >
                                        <i className="fas fa-times text-2xl"></i>
                                    </button>
                                </div>
                                
                                {/* Image */}
                                <div className="relative flex-1 overflow-hidden">
                                    <img 
                                        src={selectedArtwork.images[currentImageIndex]} 
                                        alt={selectedArtwork.title}
                                        className="w-full h-full object-contain max-h-[60vh]"
                                    />
                                    
                                    {/* Navigation arrows */}
                                    {selectedArtwork.images.length > 1 && (
                                        <>
                                            <button 
                                                onClick={(e) => { e.stopPropagation(); prevImage(); }}
                                                className="absolute left-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-75 transition"
                                                aria-label="Previous image"
                                            >
                                                <i className="fas fa-chevron-left"></i>
                                            </button>
                                            <button 
                                                onClick={(e) => { e.stopPropagation(); nextImage(); }}
                                                className="absolute right-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-75 transition"
                                                aria-label="Next image"
                                            >
                                                <i className="fas fa-chevron-right"></i>
                                            </button>
                                        </>
                                    )}
                                    
                                    {/* Image counter */}
                                    {selectedArtwork.images.length > 1 && (
                                        <div className="absolute bottom-4 left-1/2 -translate-x-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                                            {currentImageIndex + 1} / {selectedArtwork.images.length}
                                        </div>
                                    )}
                                </div>
                                
                                {/* Description */}
                                <div className="p-4 border-t">
                                    <p className="text-gray-700">{selectedArtwork.description}</p>
                                </div>
                            </div>
                        </div>
                    )}
                </section>

                <section className="bg-amber-50 rounded-xl p-12 mb-16 relative overflow-hidden">
                    <div className="pattern-bg absolute inset-0"></div>
                    <div className="relative z-10">
                      <h2 className="artistic-heading text-4xl font-bold text-gray-800 mb-8 text-center fade-in">Join Our Creative Community</h2>
                      <div className="grid md:grid-cols-4 gap-8">
                        <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                          <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i className="fas fa-paint-brush text-2xl text-amber-600" aria-label="Paint Brush Icon"></i>
                          </div>
                          <h3 className="text-xl font-bold mb-4">Volunteer with us</h3>
                          <p className="text-gray-600">add details</p>
                        </div>
                        <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                          <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i className="fas fa-image text-2xl text-amber-600" aria-label="Image Icon"></i>
                          </div>
                          <h3 className="text-xl font-bold mb-4">Donate material</h3>
                          <p className="text-gray-600"></p>
                        </div>
                        <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                          <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i className="fas fa-music text-2xl text-amber-600" aria-label="Music Icon"></i>
                          </div>
                          <h3 className="text-xl font-bold mb-4">School collaboration</h3>
                          <p className="text-gray-600"></p>
                        </div>
                        <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                          <div className="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i className="fas fa-gift text-2xl text-amber-600" aria-label="Gift Icon"></i> {/* Or a more appropriate icon */}
                          </div>
                          <h3 className="text-xl font-bold mb-4">Corporate Gifting</h3>
                          <p className="text-gray-600">Unique and artistic gifts for businesses</p>
                        </div>
                        
                      </div>
                    </div>
</section>


                <section className="text-center mb-16 max-w-4xl mx-auto">
                    <h2 className="artistic-heading text-4xl font-bold text-gray-800 mb-6 fade-in">Join Our Creative Community</h2>
                    <p className="text-xl text-gray-600 mb-8 fade-in" style={{animationDelay: '0.3s'}}>
                        Whether you're an experienced artist or just beginning your creative journey, 
                        our doors are open to all who wish to explore the world of arts and crafts.
                    </p>
                    <a
                      href="https://docs.google.com/forms/d/e/1FAIpQLSd091F7yX0SJMDXT_eLybLfdX69u54_kKmCAwFaqCqXjuo-Dw/viewform"
                      target="_blank"
                      rel="noopener noreferrer"
                      className="creative-button text-white px-8 py-3 rounded-full font-semibold transition fade-in bg-[#0F52BA] hover:bg-blue-700"
                      style={{ animationDelay: '0.6s' }}
                      >
                      Join Now
                      </a>  
                </section>
                </div>
            </div>
        );
        };
</script>
