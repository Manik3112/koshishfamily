
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
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
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
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
    const App = () => {
        return (
            <div>
                <div className="hero-gradient text-white py-20 px-4 mb-12">
                    <div className="container mx-auto text-center">
                        <h1 className="text-5xl font-bold mb-6 fade-in">Pathshala Department</h1>
                        <p className="text-2xl mb-8 fade-in" style={{animationDelay: '0.3s'}}>
                            Nurturing Young Minds, Building Better Futures
                        </p>
                        <button className="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-opacity-90 transition fade-in" style={{animationDelay: '0.6s'}}>
                            Learn More
                        </button>
                    </div>
                </div>
                
                <div className="container mx-auto px-4">

                <section className="grid md:grid-cols-2 gap-12 mb-16">
                    <div className="space-y-6">
                        <h2 className="text-3xl font-bold text-gray-800 fade-in">Our Educational Approach</h2>
                        <p className="text-lg text-gray-600 fade-in" style={{animationDelay: '0.3s'}}>
                            At Pathshala, we believe in providing holistic education that goes beyond textbooks.
                            Our dedicated teachers focus on developing:
                        </p>
                        <ul className="space-y-4 text-gray-600 fade-in" style={{animationDelay: '0.6s'}}>
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

                <section className="bg-gray-50 rounded-xl p-12 mb-16">
                    <h2 className="text-3xl font-bold text-gray-800 mb-8 text-center fade-in">Our Programs</h2>
                    <div className="grid md:grid-cols-3 gap-8">
                        <div className="program-card bg-white p-8 rounded-xl shadow-lg text-center">
                            <div className="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i className="fas fa-graduation-cap text-2xl text-indigo-600"></i>
                            </div>
                            <h3 className="text-xl font-bold mb-4">Primary Education</h3>
                            <p className="text-gray-600">Foundation courses for children aged 6-10 years</p>
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

                <section className="mb-16">
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

<div id="root" style="margin-top: 80px;"></div>
