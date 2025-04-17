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
        background: linear-gradient(90deg, #3b82f6, #1d4ed8, #3b82f6);
        transform: scaleX(0);
        transform-origin: left;
        animation: brushStroke 1s ease-out forwards;
    }
    @keyframes brushStroke {
        to { transform: scaleX(1); }
    }
    .wave-bg {
        position: relative;
        overflow: hidden;
    }
    .wave-bg::before,
    .wave-bg::after {
        content: '';
        position: absolute;
        width: 200%;
        height: 200%;
        top: -50%;
        left: -50%;
        background: radial-gradient(circle at center,
            rgba(59, 130, 246, 0.8) 0%,
            rgba(29, 78, 216, 0.6) 30%,
            rgba(59, 130, 246, 0.4) 60%,
            transparent 70%
        );
    }
    .wave-bg::before {
        animation: waveRotate 20s linear infinite;
    }
    .wave-bg::after {
        animation: waveRotate 15s linear infinite reverse;
        opacity: 0.7;
    }
    @keyframes waveRotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .process-card {
        transition: all 0.4s ease-in-out;
        position: relative;
        overflow: hidden;
    }
    .process-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(29, 78, 216, 0.1));
        transform: translateY(100%);
        transition: transform 0.4s ease-in-out;
    }
    .process-card:hover {
        transform: translateY(-10px);
    }
    .process-card:hover::before {
        transform: translateY(0);
    }
    .process-icon {
        transition: all 0.3s ease;
    }
    .process-card:hover .process-icon {
        transform: scale(1.2);
    }
    .stat-number {
        animation: countUp 2s ease-out forwards;
        opacity: 0;
    }
    .fade-in {
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes countUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .img-hover {
        transition: transform 0.3s ease;
    }
    .img-hover:hover {
        transform: scale(1.05);
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
</style>

<script type="text/babel">
const App = () => {
  const [countItems, setCountItems] = React.useState(0);
  const [countFamilies, setCountFamilies] = React.useState(0);
  const [countDrives, setCountDrives] = React.useState(0);

  const [itemsDone, setItemsDone] = React.useState(false);
  const [familiesDone, setFamiliesDone] = React.useState(false);
  const [drivesDone, setDrivesDone] = React.useState(false);

  React.useEffect(() => {
    const animateCounter = (current, set, target, doneSetter) => {
      const increment = Math.ceil(target / 100);
      if (current < target) {
        setTimeout(() => {
          const next = current + increment;
          if (next >= target) {
            set(target);
            doneSetter(true);
          } else {
            set(next);
          }
        }, 50);
      }
    };

    if (!itemsDone) animateCounter(countItems, setCountItems, 5000, setItemsDone);
    if (!familiesDone) animateCounter(countFamilies, setCountFamilies, 1000, setFamiliesDone);
    if (!drivesDone) animateCounter(countDrives, setCountDrives, 50, setDrivesDone);
  }, [countItems, countFamilies, countDrives, itemsDone, familiesDone, drivesDone]);


        return (
            <div>
                <div className="wave-bg text-white py-24 px-4 mb-12 relative">
                    <div className="container mx-auto text-center">
                        <h1 className="text-5xl font-bold mb-6 fade-in">Collection & Distribution</h1>
                        <p className="text-2xl mb-8 fade-in" style={{animationDelay: '0.3s'}}>
                            Bridging the Gap Between Need and Support
                        </p>
                        <button className="creative-button bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition fade-in" style={{animationDelay: '0.6s'}}>
                            Get Involved
                        </button>
                    </div>
                </div>

                <div className="container mx-auto px-4">

                <section className="grid md:grid-cols-2 gap-8 mb-16">
                    <div className="space-y-6">
                        <h2 className="artistic-heading text-3xl font-bold text-gray-800">Our Mission</h2>
                        <p className="text-gray-600">
                            We are dedicated to collecting and distributing essential amenities to children and families in need.
                            Our network of volunteers works tirelessly to ensure resources reach those who need them most.
                        </p>
                        <div className="bg-blue-50 p-6 rounded-xl shadow-md fade-in" style={{animationDelay: '0.6s'}}>
                            <h3 className="text-xl font-bold mb-4">What We Collect</h3>
                            <ul className="grid grid-cols-2 gap-4 text-gray-600">
                                <li className="flex items-center">
                                    <i className="fas fa-book text-blue-600 mr-3"></i>
                                    Educational Materials
                                </li>
                                <li className="flex items-center">
                                    <i className="fas fa-tshirt text-blue-600 mr-3"></i>
                                    Clothing
                                </li>
                                <li className="flex items-center">
                                    <i className="fas fa-pencil-alt text-blue-600 mr-3"></i>
                                    School Supplies
                                </li>
                                <li className="flex items-center">
                                    <i className="fas fa-utensils text-blue-600 mr-3"></i>
                                    Food Items
                                </li>
                                <li className="flex items-center">
                                    <i className="fas fa-gamepad text-blue-600 mr-3"></i>
                                    Toys
                                </li>
                                <li className="flex items-center">
                                    <i className="fas fa-book-open text-blue-600 mr-3"></i>
                                    Books
                                </li>
                            </ul>
                        </div>
                    </div>
                    

                    <div className="grid grid-cols-2 gap-6">
                        <img src="/images/event/event-1.jpg" alt="Distribution Event" className="rounded-xl shadow-xl img-hover" />
                        <img src="/images/event/event-2.jpg" alt="Collection Drive" className="rounded-xl shadow-xl img-hover" />
                    </div>
                </section>
                <section className="bg-blue-50 py-16 rounded-xl mb-16">
                  <div className="max-w-7xl mx-auto px-6">
                    <h2 className="text-4xl font-bold text-center mb-16 text-blue-700">Our Impact Timeline</h2>

                    {/* Timeline Wrapper */}
                    <div className="flex justify-between items-start relative">
                      {[
                        {
                          title: "Places Touched",
                          content: "12 areas in Doon: DIT, Malsi, Sahastradhara, ISBT, Ghantaghar, ONGC, etc.",
                        },
                        {
                          title: "People Reached",
                          content: "10,800 people reached – approx. 900/year.",
                        },
                        {
                          title: "Clothes/Blankets",
                          content: "1,44,000 items – 1200/year distributed.",
                        },
                        {
                          title: "Distribution Drives",
                          content: "Clothes, Stationery, Sanitary Pads, Medicines, Dustbins, Fruits, Accessories.",
                        },
                        {
                          title: "Awareness Camps",
                          content: "Health, Yoga, Dental camps & awareness sessions monthly/annually.",
                        },
                      ].map((item, index) => (
                        <div key={index} className="flex flex-col items-center w-1/5 relative">
                          {/* Dot */}
                          <div className="w-5 h-5 bg-white border-4 border-blue-600 rounded-full z-10"></div>
                          {index < 4 && (
                            <div className="absolute top-2 left-3/2 w-full h-1 bg-blue-600 z-0 transform translate-x-1/2"></div>
                          )}
                          <div className="mt-6 text-center">
                            <h3 className="text-lg font-semibold text-blue-700 mb-2">{item.title}</h3>
                            <p className="text-sm text-blue-600">{item.content}</p>
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                </section>





                <section className="bg-blue-50 rounded-xl p-12 mb-16 relative overflow-hidden">
                    <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in">How It Works</h2>
                    <div className="grid md:grid-cols-4 gap-6">
                        <div className="process-card bg-white p-8 rounded-xl shadow-lg text-center">
                            <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i className="fas fa-box-open text-2xl text-blue-600 process-icon"></i>
                            </div>
                            <h3 className="text-xl font-bold mb-4">Collection</h3>
                            <p className="text-gray-600">We collect donations from generous contributors</p>
                        </div>
                        <div className="process-card bg-white p-8 rounded-xl shadow-lg text-center">
                            <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i className="fas fa-search text-2xl text-blue-600 process-icon"></i>
                            </div>
                            <h3 className="text-xl font-bold mb-4">Assessment</h3>
                            <p className="text-gray-600">We evaluate and sort the collected items</p>
                        </div>
                        <div className="process-card bg-white p-8 rounded-xl shadow-lg text-center">
                            <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i className="fas fa-tasks text-2xl text-blue-600 process-icon"></i>
                            </div>
                            <h3 className="text-xl font-bold mb-4">Organization</h3>
                            <p className="text-gray-600">We organize items based on needs</p>
                        </div>
                        <div className="process-card bg-white p-8 rounded-xl shadow-lg text-center">
                            <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i className="fas fa-gift text-2xl text-blue-600 process-icon"></i>
                            </div>
                            <h3 className="text-xl font-bold mb-4">Distribution</h3>
                            <p className="text-gray-600">We distribute to those in need</p>
                        </div>
                    </div>
                </section>

                <section className="mb-16">
                    <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Impact</h2>
                    <div className="grid md:grid-cols-3 gap-8 text-center">
                        <div className="bg-white p-8 rounded-xl shadow-lg">
                        <div className="text-5xl font-bold text-blue-600 mb-4 stat-number"><span>{itemsDone ? '5000+' : countItems}</span></div>
                            <p className="text-xl text-gray-600">Items Distributed</p>
                            <div className="mt-4">
                                <i className="fas fa-box text-3xl text-blue-400"></i>
                            </div>
                        </div>
                        <div className="bg-white p-8 rounded-xl shadow-lg">
                            <div className="text-5xl font-bold text-blue-600 mb-4 stat-number"><span>{countFamilies < 1000 ? countFamilies : '1000+'}</span></div>
                            <p className="text-xl text-gray-600">Families Helped</p>
                            <div className="mt-4">
                                <i className="fas fa-users text-3xl text-blue-400"></i>
                            </div>
                        </div>
                        <div className="bg-white p-8 rounded-xl shadow-lg">
                            <div className="text-5xl font-bold text-blue-600 mb-4 stat-number"><span>{countDrives < 50 ? countDrives : '50+'}</span></div>
                            <p className="text-xl text-gray-600">Collection Drives</p>
                            <div className="mt-4">
                                <i className="fas fa-hand-holding-heart text-3xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        );
    };
</script>
