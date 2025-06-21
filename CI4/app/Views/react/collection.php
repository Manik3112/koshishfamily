<!-- Include Header Component -->
<?php include(APPPATH . 'Views/react/components/DepartmentHeader.php'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="/assets/css/timeline.css" rel="stylesheet">
<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Righteous&display=swap");

  /* Define CSS Variables for Color Palette */
  :root {
    --color-sapphire-blue: #0F52BA;
    --color-amber: #FFBF00;
    --color-sunglow-yellow: #FFCC33;
    --color-pastel-mint: #B2FBA5;
    --color-black: #000000;
    --color-lighter-grey: #A9A9A9;
    --color-white: #FFFFFF;
    --color-darker-amber: #CC9900; /* Derived from Amber for contrast */
    --color-light-yellow: #FFFACD; /* Derived from Sunglow yellow for active background */
    --color-lighter-blue: #6495ED; /* Used for the large number in timeline slides */
  }

  /* ========== General Design Enhancements ========== */
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
    background: linear-gradient(90deg, var(--color-sapphire-blue), var(--color-sapphire-blue), var(--color-sapphire-blue)); /* Sapphire blue */
    transform: scaleX(0);
    transform-origin: left;
    animation: brushStroke 1s ease-out forwards;
  }

  @keyframes brushStroke {
    to {
      transform: scaleX(1);
    }
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
        rgba(15, 82, 186, 0.8) 0%, /* Sapphire blue with opacity */
        rgba(15, 82, 186, 0.6) 30%, /* Sapphire blue with opacity */
        rgba(15, 82, 186, 0.4) 60%, /* Sapphire blue with opacity */
        transparent 70%);
  }

  .wave-bg::before {
    animation: waveRotate 20s linear infinite;
  }

  .wave-bg::after {
    animation: waveRotate 15s linear infinite reverse;
    opacity: 0.7;
  }

  @keyframes waveRotate {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
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
    background: linear-gradient(45deg, rgba(15, 82, 186, 0.1), rgba(15, 82, 186, 0.1)); /* Sapphire blue with opacity */
    transform: translateY(100%);
    transition: transform 0.4s ease-in-out;
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
    opacity: 1;
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
    background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 60%);
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.6s ease-out;
  }

  .creative-button:hover::before {
    transform: translate(-50%, -50%) scale(1);
  }

</style>


<script type="text/babel">
  const App = () => {
    // Define color constants
    const COLORS = {
      sapphireBlue: '#0F52BA',
      amber: '#FFBF00',
      sunglowYellow: '#FFCC33',
      pastelMint: '#B2FBA5',
      black: '#000000',
      lighterGrey: '#A9A9A9',
      white: '#FFFFFF',
      darkerAmber: '#CC9900', // Derived
      lightYellow: '#FFFACD', // Derived
      lighterBlue: '#6495ED', // Used for large number in timeline
    };

    const [countItems, setCountItems] = React.useState(0);
    const [countFamilies, setCountFamilies] = React.useState(0);
    const [countDrives, setCountDrives] = React.useState(0);
    const [itemsDone, setItemsDone] = React.useState(false);
    const [familiesDone, setFamiliesDone] = React.useState(false);
    const [drivesDone, setDrivesDone] = React.useState(false);
    
    const department = 'collectdkure';
    const title = 'Collection & Distribution';

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

    const timelineData = [
      { title: "Places Touched", content: "12 areas in Doon: DIT, Malsi, Sahastradhara, ISBT, Ghantaghar, ONGC, etc." },
      { title: "People Reached", content: "10,800 people reached – approx. 900/year." },
      { title: "Clothes/Blankets", content: "1,44,000 items – 1200/year distributed." },
      { title: "Distribution Drives", content: "Clothes, Stationery, Sanitary Pads, Medicines, Dustbins, Fruits, Accessories." },
      { title: "Awareness Camps", content: "Health, Yoga, Dental camps & awareness sessions monthly/annually." },
    ];

    return (
      <div>
        <DepartmentHeader department={department} title={title} />
        
        {/* Hero */}
        <div className="wave-bg text-white py-24 px-4 mb-12 relative" style={{ backgroundColor: COLORS.sapphireBlue }}> {/* Sapphire blue background */}
          <div className="container mx-auto text-center">
            <h1 className="text-5xl font-extrabold mb-6 text-white" style={{ textShadow: '0 0 6px rgba(0,0,0,0.6)', letterSpacing: '0.5px' }}>
              Collection & Distribution
            </h1>
            <p className="text-2xl mb-8 fade-in" style={{ animationDelay: '0.3s' }}>
              Bridging the Gap Between Need and Support
            </p>
            <button className="creative-button bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition fade-in" style={{ animationDelay: '0.6s', opacity: 0, color: COLORS.sapphireBlue }}> {/* Sapphire blue text */}
              Get Involved
            </button>
          </div>
        </div>

        <div className="container mx-auto px-4">
          {/* Mission */}
          <section className="space-y-8 mb-16">
            <div className="text-center md:text-left space-y-4">
              <h2 className="artistic-heading font-bold text-gray-800" style={{ fontSize: '2.88rem', color: COLORS.black }}>Our Mission</h2> {/* Black text */}
              <p className="text-gray-600 max-w-3xl mx-auto md:mx-0" style={{ color: COLORS.lighterGrey }}> {/* Lighter grey text */}
                We are dedicated to collecting and distributing essential amenities to children and families in need...
              </p>
            </div>

            <div className="grid md:grid-cols-2 gap-8 items-stretch">
              <div className="bg-white p-4 rounded-xl shadow-md fade-in h-full flex flex-col justify-between" style={{ animationDelay: '0.6s' }}> {/* White background */}
                <h2 className="text-3xl font-bold mb-5">What We Collect</h2>
                <ul className="grid grid-cols-2 gap-4 text-gray-600" style={{ color: COLORS.lighterGrey }}> {/* Lighter grey text */}
                  {["Educational Materials","Clothing","School Supplies","Food Items","Toys","Books"].map(item => (
                    <li key={item} className="flex items-center">
                      <i className="fas fa-book mr-3" style={{ color: COLORS.sapphireBlue }}></i> {item} {/* Sapphire blue icon */}
                    </li>
                  ))}
                </ul>
              </div>
              <div className="grid grid-cols-2 gap-6 h-full">
                <img src="/images/event/event-1.jpg" alt="Distribution" className="rounded-xl shadow-xl img-hover object-cover w-full h-full" />
                <img src="/images/event/event-2.jpg" alt="Collection" className="rounded-xl shadow-xl img-hover object-cover w-full h-full" />
              </div>
            </div>
          </section>

          {/* Impact Counters */}
          <section className="mb-16">
            <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in" style={{ color: COLORS.black }}>Our Impact</h2> {/* Black text */}
            <div className="grid md:grid-cols-3 gap-8 text-center">
              <div className="bg-white p-8 rounded-xl shadow-lg"> {/* White background */}
                <div className="text-5xl font-bold mb-4 stat-number" style={{ color: COLORS.sapphireBlue }}> {/* Sapphire blue text */}
                  <span>{itemsDone ? '5000+' : countItems}</span>
                </div>
                <p className="text-xl text-gray-600" style={{ color: COLORS.lighterGrey }}>Items Distributed</p> {/* Lighter grey text */}
                <div className="mt-4"><i className="fas fa-box text-3xl" style={{ color: COLORS.sapphireBlue }}></i></div> {/* Sapphire blue icon */}
              </div>

              <div className="bg-white p-8 rounded-xl shadow-lg"> {/* White background */}
                <div className="text-5xl font-bold mb-4 stat-number" style={{ color: COLORS.sapphireBlue }}> {/* Sapphire blue text */}
                  <span>{familiesDone ? '1000+' : countFamilies}</span>
                </div>
                <p className="text-xl text-gray-600" style={{ color: COLORS.lighterGrey }}>Families Helped</p> {/* Lighter grey text */}
                <div className="mt-4"><i className="fas fa-users text-3xl" style={{ color: COLORS.sapphireBlue }}></i></div> {/* Sapphire blue icon */}
              </div>

              <div className="bg-white p-8 rounded-xl shadow-lg"> {/* White background */}
                <div className="text-5xl font-bold mb-4 stat-number" style={{ color: COLORS.sapphireBlue }}> {/* Sapphire blue text */}
                  <span>{drivesDone ? '50+' : countDrives}</span>
                </div>
                <p className="text-xl text-gray-600" style={{ color: COLORS.lighterGrey }}>Collection Drives</p> {/* Lighter grey text */}
                <div className="mt-4"><i className="fas fa-hand-holding-heart text-3xl" style={{ color: COLORS.sapphireBlue }}></i></div> {/* Sapphire blue icon */}
              </div>
            </div>
          </section>

          {/* Timeline */}
          <section className="bg-blue-50 py-16 rounded-xl mb-16"> {/* White background */}
            <div className="max-w-7xl mx-auto px-6">
              <h2 className="text-4xl font-bold text-center mb-16" style={{ color: COLORS.sapphireBlue }}>Our Impact Journey</h2> {/* Sapphire blue text */}
              
              <div className="timeline-container">
                {/* Radio buttons for each timeline item */}
                {timelineData.map((item, index) => (
                  <input
                    key={index}
                    type="radio"
                    name="timeline"
                    id={`timeline-${index + 1}`}
                    defaultChecked={index === 0}
                    className="timeline-radio"
                  />
                ))}
                
                {/* Timeline Navigation */}
                <div className="timeline-nav flex justify-center mb-12">
                  <div className="relative flex items-center space-x-8">
                    {timelineData.map((item, index) => (
                      <React.Fragment key={index}>
                        {/* Remove the 'active' class here, CSS handles it based on :checked */}
                        <label htmlFor={`timeline-${index + 1}`} className="timeline-nav-dot">
                          <span className="timeline-year" style={{ color: COLORS.sapphireBlue }}>{index + 1}</span> {/* Sapphire blue number */}
                          <span className="timeline-label" style={{ color: COLORS.lighterGrey }}>{item.title}</span> {/* Lighter grey label */}
                        </label>
                        {index < timelineData.length - 1 && <div className="timeline-nav-line"></div>}
                      </React.Fragment>
                    ))}
                  </div>
                </div>
                
                {/* Timeline Content */}
                <div className="timeline-content">
                  {timelineData.map((item, index) => (
                    <div key={index} className={`timeline-slide timeline-slide-${index + 1}`}>
                      <div className="grid md:grid-cols-2 gap-12 items-center">
                        {/* Content for each slide */}
                        <div>
                          <div className="text-6xl font-bold mb-4" style={{ color: COLORS.lighterBlue }}>{index + 1}</div> {/* Lighter blue number */}
                          <h3 className="text-3xl font-bold mb-4" style={{ color: COLORS.sapphireBlue }}>{item.title}</h3> {/* Sapphire blue title */}
                          <p className="text-lg mb-6" style={{ color: COLORS.lighterGrey }}>
                            {item.content} {/* Lighter grey content */}
                          </p>
                        </div>
                        {/* Image for each slide */}
                        <div>
                          <img src={`/images/event/event-${index + 1}.jpg`} alt={`Timeline Image ${index + 1}`} className="rounded-xl shadow-lg w-full h-80 object-cover" />
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </section>

          {/* Process */}
          <section className="bg-white rounded-xl p-12 mb-16"> {/* White background */}
            <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in" style={{ color: COLORS.black }}>From You to Them</h2> {/* Black text */}
            <div className="grid md:grid-cols-4 gap-6">
              {[
                { icon: "box-open", title: "Collection", desc: "We collect donations from generous contributors" },
                { icon: "search", title: "Assessment", desc: "We evaluate and sort the collected items" },
                { icon: "tasks", title: "Organization", desc: "We organize items based on needs" },
                { icon: "gift", title: "Distribution", desc: "We distribute to those in need" },
              ].map((step, i) => (
                <div key={i} className="process-card bg-white p-8 rounded-xl shadow-lg text-center"> {/* White background */}
                  <div className="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6" style={{ backgroundColor: COLORS.pastelMint }}> {/* Pastel mint background for highlight */}
                    <i className={`fas fa-${step.icon} text-2xl`} style={{ color: COLORS.sapphireBlue }}></i> {/* Sapphire blue icon */}
                  </div>
                  <h3 className="text-xl font-bold mb-4">{step.title}</h3>
                  <p className="text-gray-600" style={{ color: COLORS.lighterGrey }}>{step.desc}</p> {/* Lighter grey text */}
                </div>
              ))}
            </div>
          </section>
        </div>
      </div>
    );
  };
</script>
