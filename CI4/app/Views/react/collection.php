<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Righteous&display=swap");

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
    background: linear-gradient(90deg, #3b82f6, #1d4ed8, #3b82f6);
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
        rgba(15, 82, 186, 0.8) 0%,
        rgba(0, 103, 165, 0.6) 30%,
        rgba(28, 57, 187, 0.4) 60%,
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

  /* ========== Star Wars Timeline Rope Styling ========== */
  .starwars .timeline {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: 3rem;
  margin-top: 2rem;
  padding: 0 2rem;
}

.starwars .timeline-line {
  position: absolute;
  top: 50%;
  left: 2rem;
  right: 2rem;
  height: 8px;
  margin-top: -4px;
  background: repeating-linear-gradient(
    45deg,
    #b49a5f,
    #b49a5f 6px,
    #8c7749 6px,
    #8c7749 12px
  );
  border-radius: 5px;
  z-index: 0;
  box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
}

.starwars .timeline-line:before {
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 0%;
  background: linear-gradient(90deg, #ffe066, #ffcc00);
  border-radius: 5px;
  z-index: 1;
  transition: width 0.35s ease;
}

.starwars .timeline-dot {
  position: relative;
  z-index: 2;
  height: 2rem;
  width: 2rem;
  background: radial-gradient(circle at 30% 30%, #ffe066 40%, #ffcc00 80%);
  border: 3px solid #ffda6b;
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
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

    const timelineData = [
      { title: "Places Touched", content: "12 areas in Doon: DIT, Malsi, Sahastradhara, ISBT, Ghantaghar, ONGC, etc." },
      { title: "People Reached", content: "10,800 people reached – approx. 900/year." },
      { title: "Clothes/Blankets", content: "1,44,000 items – 1200/year distributed." },
      { title: "Distribution Drives", content: "Clothes, Stationery, Sanitary Pads, Medicines, Dustbins, Fruits, Accessories." },
      { title: "Awareness Camps", content: "Health, Yoga, Dental camps & awareness sessions monthly/annually." },
    ];

    return (
      <div>
        {/* Hero */}
        <div className="wave-bg text-white py-24 px-4 mb-12 relative">
          <div className="container mx-auto text-center">
            <h1 className="text-5xl font-extrabold mb-6 text-white" style={{ textShadow: '0 0 6px rgba(0,0,0,0.6)', letterSpacing: '0.5px' }}>
              Collection & Distribution
            </h1>
            <p className="text-2xl mb-8 fade-in" style={{ animationDelay: '0.3s' }}>
              Bridging the Gap Between Need and Support
            </p>
            <button className="creative-button bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition fade-in" style={{ animationDelay: '0.6s', opacity: 0 }}>
              Get Involved
            </button>
          </div>
        </div>

        <div className="container mx-auto px-4">
          {/* Mission */}
          <section className="space-y-8 mb-16">
            <div className="text-center md:text-left space-y-4">
              <h2 className="artistic-heading font-bold text-gray-800" style={{ fontSize: '2.88rem' }}>Our Mission</h2>
              <p className="text-gray-600 max-w-3xl mx-auto md:mx-0">
                We are dedicated to collecting and distributing essential amenities to children and families in need...
              </p>
            </div>

            <div className="grid md:grid-cols-2 gap-8 items-stretch">
              <div className="bg-blue-50 p-4 rounded-xl shadow-md fade-in h-full flex flex-col justify-between" style={{ animationDelay: '0.6s' }}>
                <h2 className="text-3xl font-bold mb-5">What We Collect</h2>
                <ul className="grid grid-cols-2 gap-4 text-gray-600">
                  {["Educational Materials","Clothing","School Supplies","Food Items","Toys","Books"].map(item => (
                    <li key={item} className="flex items-center">
                      <i className="fas fa-book text-blue-600 mr-3"></i> {item}
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
            <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Impact</h2>
            <div className="grid md:grid-cols-3 gap-8 text-center">
              <div className="bg-white p-8 rounded-xl shadow-lg">
                <div className="text-5xl font-bold text-blue-600 mb-4 stat-number">
                  <span>{itemsDone ? '5000+' : countItems}</span>
                </div>
                <p className="text-xl text-gray-600">Items Distributed</p>
                <div className="mt-4"><i className="fas fa-box text-3xl text-blue-400"></i></div>
              </div>

              <div className="bg-white p-8 rounded-xl shadow-lg">
                <div className="text-5xl font-bold text-blue-600 mb-4 stat-number">
                  <span>{familiesDone ? '1000+' : countFamilies}</span>
                </div>
                <p className="text-xl text-gray-600">Families Helped</p>
                <div className="mt-4"><i className="fas fa-users text-3xl text-blue-400"></i></div>
              </div>

              <div className="bg-white p-8 rounded-xl shadow-lg">
                <div className="text-5xl font-bold text-blue-600 mb-4 stat-number">
                  <span>{drivesDone ? '50+' : countDrives}</span>
                </div>
                <p className="text-xl text-gray-600">Collection Drives</p>
                <div className="mt-4"><i className="fas fa-hand-holding-heart text-3xl text-blue-400"></i></div>
              </div>
            </div>
          </section>

          {/* Timeline */}
          <section className="bg-blue-50 py-16 rounded-xl mb-16">
          <div class="starwars">
            <div class="timeline">
                <div class="timeline-line"></div>
                <div class="timeline-dot"></div>
                <div class="timeline-dot"></div>
                <div class="timeline-dot"></div>
            </div>
            </div>

            <div className="max-w-7xl mx-auto px-6">
              <h2 className="text-4xl font-bold text-center mb-16 text-blue-700">Our Impact Timeline</h2>
              <div className="grid md:grid-cols-2 gap-10">
                {timelineData.map((item, idx) => (
                  <div key={idx} className="bg-white p-6 rounded-lg shadow-lg">
                    <h3 className="text-2xl font-semibold mb-2">{item.title}</h3>
                    <p className="text-gray-600">{item.content}</p>
                  </div>
                ))}
              </div>
            </div>
          </section>

          {/* Process */}
          <section className="bg-blue-50 rounded-xl p-12 mb-16">
            <h2 className="artistic-heading text-3xl font-bold text-gray-800 mb-8 text-center fade-in">From You to Them</h2>
            <div className="grid md:grid-cols-4 gap-6">
              {[
                { icon: "box-open", title: "Collection", desc: "We collect donations from generous contributors" },
                { icon: "search", title: "Assessment", desc: "We evaluate and sort the collected items" },
                { icon: "tasks", title: "Organization", desc: "We organize items based on needs" },
                { icon: "gift", title: "Distribution", desc: "We distribute to those in need" },
              ].map((step, i) => (
                <div key={i} className="process-card bg-white p-8 rounded-xl shadow-lg text-center">
                  <div className="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i className={`fas fa-${step.icon} text-2xl text-blue-600 process-icon`}></i>
                  </div>
                  <h3 className="text-xl font-bold mb-4">{step.title}</h3>
                  <p className="text-gray-600">{step.desc}</p>
                </div>
              ))}
            </div>
          </section>
        </div>
      </div>
    );
  };
  
  ReactDOM.render(<App />, document.getElementById('root'));
</script>