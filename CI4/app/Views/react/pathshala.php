<!-- Include Header Component -->
<?php include(APPPATH . 'Views/react/components/DepartmentHeader.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
    .carousel {
        width: 100%;
        text-align: center;
        font-family: "Trebuchet MS", sans-serif;
        display: block;
        font-size: 6vmin;
        position: relative;
        height: 500px;
        margin-bottom: 2rem;
    }

    .carousel .pages {
        position: relative;
        height: 100%;
    }

    .carousel .page {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: transform 0.5s;
        transform: scale(0);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .carousel {
        min-height: 250px;
    }

    .carousel {
        background-color: #f0f0f0;
    }


    .carousel .page div {
        padding: 3em;
    }

    .carousel .page label {
        cursor: pointer;
        background: #d9ff4f;
        padding: 1em 2em;
        display: inline-block;
        margin-top: 1em;
    }

    /* Show pages when corresponding input is checked */
    #page1cb:checked~.pages #page1 {
        transform: scale(1);
    }

    #page2cb:checked~.pages #page2 {
        transform: scale(1);
    }

    #page3cb:checked~.pages #page3 {
        transform: scale(1);
    }

    #page4cb:checked~.pages #page4 {
        transform: scale(1);
    }

    #page5cb:checked~.pages #page5 {
        transform: scale(1);
    }

    /* Other styles (already good) */
    .program-card {
        transition: transform 0.3s ease-in-out;
    }

    .program-card:hover {
        transform: translateY(-10px);
    }

    .stat-number {
        animation: countUp 2s ease-out forwards;
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
    }

    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .hero-gradient {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    }

    .img-hover {
        transition: transform 0.3s ease;
    }

    .img-hover:hover {
        transform: scale(1.05);
    }
</style>

<script type="text/babel">
    const { useState, useEffect } = React;

  const App = () => {
    const [currentIndex, setCurrentIndex] = useState(0);
    const department = 'pathshala';
    const title = 'Pathshala';
    
    const images = [
      "/images/arts/our_products1.jpeg",
      "/images/arts/our_products2.jpeg",
      "/images/arts/our_products3.jpeg",
      "/images/arts/our_products4.jpeg",
      "/images/arts/our_products5.jpeg"
    ];

    useEffect(() => {
    const interval = setInterval(() => {
      setCurrentIndex((prevIndex) => (prevIndex + 1) % images.length);
    }, 4000); // 4000 ms = 4 seconds

    return () => clearInterval(interval); // Cleanup on unmount
  }, [images.length]);

  const nextSlide = () => {
    setCurrentIndex((prevIndex) => (prevIndex + 1) % images.length);
  };

  return (
    <div>
        <DepartmentHeader department={department} title={title} />
        
        {/* Hero Section */}
        <div className="bg-gradient-to-r from-blue-600 to-green-400 text-white py-20 px-4 mb-12">
          <div className="container mx-auto text-center">
            <h1 className="text-5xl font-bold mb-6 fade-in">Pathshala Department</h1>
            <p className="text-2xl mb-8 fade-in" style={{ animationDelay: '0.3s' }}>
              Nurturing Young Minds, Building Better Futures
            </p>
            <button className="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition fade-in" style={{ animationDelay: '0.6s' }}>
              Learn More
            </button>
          </div>
        </div>

        {/* Carousel */}
        {/* Carousel */}
        <div className="mx-4 md:mx-12 my-12 p-4 rounded-2xl shadow-lg bg-gradient-to-r from-blue-600/20 to-green-400/20 shadow-lg">
          <div className="relative w-full h-[500px] overflow-hidden rounded-2xl">
            {images.map((img, index) => (
              <div
                key={index}
                className={`absolute top-0 left-0 w-full h-full transition-opacity duration-700 ease-in-out ${
                  index === currentIndex ? "opacity-100 z-10" : "opacity-0 z-0"
                }`}
              >
                <img
                  src={img}
                  alt={`Slide ${index + 1}`}
                  className="w-full h-full object-cover rounded-2xl"
                />
              </div>
            ))}
                
            {/* Left arrow */}
            <button
              onClick={() =>
                setCurrentIndex((prevIndex) =>
                  prevIndex === 0 ? images.length - 1 : prevIndex - 1
                )
              }
              className="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/70 hover:bg-white p-2 rounded-full shadow-md z-20"
            >
              <i className="fas fa-chevron-left text-2xl text-gray-700"></i>
            </button>
            
            {/* Right arrow */}
            <button
              onClick={nextSlide}
              className="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/70 hover:bg-white p-2 rounded-full shadow-md z-20"
            >
              <i className="fas fa-chevron-right text-2xl text-gray-700"></i>
            </button>
          </div>
        </div>



        {/* Content Section */}
        <div className="container mx-auto px-4">

          {/* Our Educational Approach */}
          <section className="bg-gradient-to-r from-blue-600/20 to-green-400/20 shadow-lg rounded-2xl p-10 mb-16 space-y-12">
            <section className="grid md:grid-cols-2 gap-12 mb-16">
              <div className="space-y-6">
                <h2 className="text-3xl font-bold text-gray-800 fade-in">Our Educational Approach</h2>
                <p className="text-lg text-gray-600 fade-in" style={{ animationDelay: '0.3s' }}>
                  At Pathshala, we believe in providing holistic education that goes beyond textbooks.
                  Our dedicated teachers focus on developing:
                </p>
                <ul className="space-y-4 text-gray-600 fade-in" style={{ animationDelay: '0.6s' }}>
                  <li className="flex items-center">
                    <i className="fas fa-brain text-indigo-600 mr-3"></i>
                    Critical thinking and problem-solving skills
                  </li>
                  <li className="flex items-center">
                    <i className="fas fa-palette text-indigo-600 mr-3"></i>
                    Creative expression and artistic abilities
                  </li>
                  <li className="flex items-center">
                    <i className="fas fa-book text-indigo-600 mr-3"></i>
                    Strong foundation in core subjects
                  </li>
                  <li className="flex items-center">
                    <i className="fas fa-heart text-indigo-600 mr-3"></i>
                    Character development and values
                  </li>
                </ul>
              </div>
              <div className="grid grid-cols-2 gap-6">
                <img src="/images/kids/bharti.jpeg" alt="Student Learning" className="rounded-lg shadow-lg img-hover" />
                <img src="/images/kids/ramesh.jpeg" alt="Student Activities" className="rounded-lg shadow-lg img-hover" />
              </div>
            </section>
        </section>
        
         {/* Multiple Inspirational Quotes Section */}
         <section className="bg-gradient-to-r from-blue-600/20 to-green-400/20 shadow-lg rounded-2xl p-10 mb-16 space-y-12 shadow-lg">


            {/* 1st Block - Image Left */}
                <div className="flex flex-col md:flex-row items-center bg-gray-50 rounded-xl p-8 shadow-md">
              <img
                src="/images/kids/arjun.jpeg"
                alt="Inspiration 1"
                className="w-32 h-32 rounded-full object-cover border-4 border-indigo-200 shadow-md mb-4 md:mb-0 md:mr-8"
              />
              <div className="text-center md:text-left">
                <p className="text-lg italic text-gray-700 mb-2">
                  "The beautiful thing about learning is that nobody can take it away from you."
                </p>
                <p className="text-indigo-600 font-semibold">— B.B. King</p>
              </div>
            </div>

            {/* 2nd Block - Image Right */}
            <div className="flex flex-col md:flex-row-reverse items-center bg-gray-50 rounded-xl p-8 shadow-md">
              <img
                src="/images/kids/arjun.jpeg"
                alt="Inspiration 2"
                className="w-32 h-32 rounded-full object-cover border-4 border-indigo-200 shadow-md mb-4 md:mb-0 md:ml-8"
              />
              <div className="text-center md:text-left">
                <p className="text-lg italic text-gray-700 mb-2">
                  "Children must be taught how to think, not what to think."
                </p>
                <p className="text-indigo-600 font-semibold">— Margaret Mead</p>
              </div>
            </div>

            {/* 3rd Block - Image Left */}
            <div className="flex flex-col md:flex-row items-center bg-gray-50 rounded-xl p-8 shadow-md">
              <img
                src="/images/kids/arjun.jpeg"
                alt="Inspiration 3"
                className="w-32 h-32 rounded-full object-cover border-4 border-indigo-200 shadow-md mb-4 md:mb-0 md:mr-8"
              />
              <div className="text-center md:text-left">
                <p className="text-lg italic text-gray-700 mb-2">
                  "Education is not preparation for life; education is life itself."
                </p>
                <p className="text-indigo-600 font-semibold">— John Dewey</p>
              </div>
            </div>

            {/* 4th Block - Image Right */}
            <div className="flex flex-col md:flex-row-reverse items-center bg-gray-50 rounded-xl p-8 shadow-md">
              <img
                src="/images/kids/arjun.jpeg"
                alt="Inspiration 4"
                className="w-32 h-32 rounded-full object-cover border-4 border-indigo-200 shadow-md mb-4 md:mb-0 md:ml-8"
              />
              <div className="text-center md:text-left">
                <p className="text-lg italic text-gray-700 mb-2">
                  "Teaching kids to count is fine, but teaching them what counts is best."
                </p>
                <p className="text-indigo-600 font-semibold">— Bob Talbert</p>
              </div>
            </div>

            </section>


          {/* Our Programs */}
          <section className="bg-gradient-to-r from-blue-600/20 to-green-400/20 rounded-xl p-12 mb-16 shadow-lg">
            <h2 className="text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Programs</h2>
            <div className="grid md:grid-cols-3 gap-8">
              <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                <div className="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                  <i className="fas fa-graduation-cap text-2xl text-indigo-600"></i>
                </div>
                <h3 className="text-xl font-bold mb-4">Primary Education</h3>
                <p className="text-gray-600">Foundation courses for children aged 6–10 years</p>
              </div>
              <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                <div className="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                  <i className="fas fa-chalkboard-teacher text-2xl text-indigo-600"></i>
                </div>
                <h3 className="text-xl font-bold mb-4">After-School Support</h3>
                <p className="text-gray-600">Homework help and additional learning support</p>
              </div>
              <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                <div className="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                  <i className="fas fa-cogs text-2xl text-indigo-600"></i>
                </div>
                <h3 className="text-xl font-bold mb-4">Skill Development</h3>
                <p className="text-gray-600">Special courses focusing on practical skills</p>
              </div>
            </div>
          </section>

          {/* Our Impact */}

          <section className="bg-gradient-to-r from-blue-600/20 to-green-400/20 shadow-lg rounded-2xl p-10 mb-16 space-y- shadow-lg">
            <h2 className="text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Impact</h2>
            <div className="grid md:grid-cols-3 gap-8 text-center">
              <div className="bg-white p-8 rounded-xl shadow-lg">
                <div className="text-5xl font-bold text-indigo-600 mb-4 stat-number">200+</div>
                <p className="text-xl text-gray-600">Students Enrolled</p>
                <div className="mt-4">
                  <i className="fas fa-user-graduate text-3xl text-indigo-400"></i>
                </div>
              </div>
              <div className="bg-white p-8 rounded-xl shadow-lg">
                <div className="text-5xl font-bold text-indigo-600 mb-4 stat-number">15</div>
                <p className="text-xl text-gray-600">Dedicated Teachers</p>
                <div className="mt-4">
                  <i className="fas fa-chalkboard-teacher text-3xl text-indigo-400"></i>
                </div>
              </div>
              <div className="bg-white p-8 rounded-xl shadow-lg">
                <div className="text-5xl font-bold text-indigo-600 mb-4 stat-number">90%</div>
                <p className="text-xl text-gray-600">Success Rate</p>
                <div className="mt-4">
                  <i className="fas fa-chart-line text-3xl text-indigo-400"></i>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    );
  };
</script>
