<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_1c8fb0b1aabc1b891a6cdf5d2e013232efc597bc548f4aab1d55defb00a45819 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.css\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/home.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script src=\"https://unpkg.com/swiper/swiper-bundle.js\"></script>
    <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>

    <script>
        \$(document).ready(() => {
            var swiper = new Swiper(\".swiper-container\", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                //autoplay: {
                //    delay: 3500,
                //    disableOnInteraction: false,
                //}
            });

            var swiper_selection = new Swiper('.swiper-selection', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    700: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 60
                    }
                }
            });

            var swiper_selection = new Swiper('.swiper-mark', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    700: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 6,
                        spaceBetween: 60
                    }
                }
            });
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Le Carrée de la mode | Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "<main class=\"home\">
    <!-- CAROUSEL -->
    <section id=\"carousel\">
        <div class=\"container\">
            <div class=\"swiper-container\">
                <div id=\"main-carousel\" class=\"swiper-wrapper\">

                    <div class=\"slider swiper-slide\">
                        <picture>
                            <source media=\"(max-width: 544px)\" srcset=\"/images/home/carousel/banner-01.jpg\">
                            <source media=\"(min-width: 545px)\" srcset=\"/images/home/carousel/banner-01.jpg\">
                            <img loading=\"lazy\" src=\"/images/home/carousel/banner-01.jpg\" alt=\"Slide 01\">
                        </picture>

                        <div class=\"content\">
                            <div class=\"txt\">
                                <p>Collection printemps 2021</p>
                            </div>
                            <div class=\"btns\">
                                <a href=\"#\" class=\"btn primary md\">Femme</a>
                                <a href=\"#\" class=\"btn primary md\">Homme</a>
                                <a href=\"#\" class=\"btn primary md\">Enfant</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SELECTION -->
    <section id=\"selection\">
        <div class=\"container\">
            <p class=\"title-primary\">
                Notre sélection
            </p>

            <div class=\"swiper-selection\">
                <div class=\"swiper-wrapper\">

                    <div class=\"swiper-slide\">
                        <a href=\"\" class=\"item-block\">
                            <div class=\"status top\">
                                <p class=\"tag\">soldes</p>
                            </div>

                            <div>
                                <div class=\"photo\">
                                    <img class=\"lazy\" src=\"/images/home/6572501_1.jpg\" alt=\"\" loading=\"lazy\" itemprop=\"image\">
                                </div>
                                <p class=\"label\" itemprop=\"name\">Nike</p>
                                <p class=\"labelt\" itemprop=\"name\">Airmax</p>
                                <p class=\"price\">
                                    <span class=\"pxbarre\">160 €</span>
                                    <span class=\"pxcourant\">130 €</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- OUR SELECTION -->
    <section id=\"marks\">
        <div class=\"container\">
            <p class=\"title-primary\">
                Nos marques
            </p>

            <div class=\"swiper-mark\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-01.jpg\" alt=\"Semerjan\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-02.jpg\" alt=\"Lacoste\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-03.jpg\" alt=\"New balance\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-04.jpg\" alt=\"Unisa\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-05.jpg\" alt=\"Little la suite\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-06.jpg\" alt=\"Faguo\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STORES -->
    <section id=\"stores\">
        <div class=\"container\">
            <h1 class=\"title-primary\">Nos boutiques</h1>

            <div class=\"block-items\">
                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>La primaube</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565695416\"><i class=\"far fa-phone-alt\"></i> 05 65 69 54 16</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 11 Avenue de Rodez <br> 12450 La Primaube</p>
                        <p><i class=\"far fa-info-circle\"></i> Prêt-à-porter, Chaussures &amp; Maroquinerie</p>
                    </div>
                </div>

                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>Requista</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565740516\"><i class=\"far fa-phone-alt\"></i> 05 65 74 05 16</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 8 place Général de Gaulle <br> 12170 Requista</p>
                        <p><i class=\"far fa-info-circle\"></i> Chaussures &amp; Maroquinerie</p>
                    </div>
                </div>

                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>Saint-affrique</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565990326\"><i class=\"far fa-phone-alt\"></i> 05 65 99 03 26</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 16 Boulevard Charles de Gaulle <br> 12400 Saint-Affrique</p>
                        <p><i class=\"far fa-info-circle\"></i> Chaussures &amp; Maroquinerie</p>
                    </div>
                </div>

                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>Saint-affrique</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565495068\"><i class=\"far fa-phone-alt\"></i> 05 65 49 50 68</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 6 Boulevard de la République <br> 12400 Saint-Affrique</p>
                        <p><i class=\"far fa-info-circle\"></i> Prêt-à-porter &amp; Maroquinerie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id=\"newsletter\">
        <div class=\"container\">
            <h2 class=\"title-primary\">Notre newsletter</h2>

            <div class=\"grid-center\">
                <div class=\"col-8_md-10_sm-12\">
                    <p>Envie de découvrir nos nouveaux modèles hyper tendances, <br> nos promotions, nos actus et suivre l’aventure du Carré de la mode ?</p>
                </div>

                <div class=\"col-5_md-8_sm-12\">
                    <div class=\"field\">
                        <input type=\"text\" id=\"chnews-2\" title=\"Inscription Ã  la newsletter\" placeholder=\"Votre adresse e-mail\">
                        <button type=\"button\" onclick=\"RecNews()\" class=\"btn primary\">Je m'inscris</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 77,  185 => 76,  166 => 74,  94 => 10,  84 => 9,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.css\" />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/home.css\" />
{% endblock %}

{% block javascripts %}
    <script src=\"https://unpkg.com/swiper/swiper-bundle.js\"></script>
    <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>

    <script>
        \$(document).ready(() => {
            var swiper = new Swiper(\".swiper-container\", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                //autoplay: {
                //    delay: 3500,
                //    disableOnInteraction: false,
                //}
            });

            var swiper_selection = new Swiper('.swiper-selection', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    700: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 60
                    }
                }
            });

            var swiper_selection = new Swiper('.swiper-mark', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    700: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 6,
                        spaceBetween: 60
                    }
                }
            });
        })
    </script>
{% endblock %}

{% block title %}Le Carrée de la mode | Accueil{% endblock %}

{% block body %}
<main class=\"home\">
    <!-- CAROUSEL -->
    <section id=\"carousel\">
        <div class=\"container\">
            <div class=\"swiper-container\">
                <div id=\"main-carousel\" class=\"swiper-wrapper\">

                    <div class=\"slider swiper-slide\">
                        <picture>
                            <source media=\"(max-width: 544px)\" srcset=\"/images/home/carousel/banner-01.jpg\">
                            <source media=\"(min-width: 545px)\" srcset=\"/images/home/carousel/banner-01.jpg\">
                            <img loading=\"lazy\" src=\"/images/home/carousel/banner-01.jpg\" alt=\"Slide 01\">
                        </picture>

                        <div class=\"content\">
                            <div class=\"txt\">
                                <p>Collection printemps 2021</p>
                            </div>
                            <div class=\"btns\">
                                <a href=\"#\" class=\"btn primary md\">Femme</a>
                                <a href=\"#\" class=\"btn primary md\">Homme</a>
                                <a href=\"#\" class=\"btn primary md\">Enfant</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SELECTION -->
    <section id=\"selection\">
        <div class=\"container\">
            <p class=\"title-primary\">
                Notre sélection
            </p>

            <div class=\"swiper-selection\">
                <div class=\"swiper-wrapper\">

                    <div class=\"swiper-slide\">
                        <a href=\"\" class=\"item-block\">
                            <div class=\"status top\">
                                <p class=\"tag\">soldes</p>
                            </div>

                            <div>
                                <div class=\"photo\">
                                    <img class=\"lazy\" src=\"/images/home/6572501_1.jpg\" alt=\"\" loading=\"lazy\" itemprop=\"image\">
                                </div>
                                <p class=\"label\" itemprop=\"name\">Nike</p>
                                <p class=\"labelt\" itemprop=\"name\">Airmax</p>
                                <p class=\"price\">
                                    <span class=\"pxbarre\">160 €</span>
                                    <span class=\"pxcourant\">130 €</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- OUR SELECTION -->
    <section id=\"marks\">
        <div class=\"container\">
            <p class=\"title-primary\">
                Nos marques
            </p>

            <div class=\"swiper-mark\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-01.jpg\" alt=\"Semerjan\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-02.jpg\" alt=\"Lacoste\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-03.jpg\" alt=\"New balance\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-04.jpg\" alt=\"Unisa\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-05.jpg\" alt=\"Little la suite\">
                        </a>
                    </div>

                    <div class=\"swiper-slide\">
                        <a href=\"#\">
                            <img src=\"/images/home/marques/home-marque-06.jpg\" alt=\"Faguo\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STORES -->
    <section id=\"stores\">
        <div class=\"container\">
            <h1 class=\"title-primary\">Nos boutiques</h1>

            <div class=\"block-items\">
                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>La primaube</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565695416\"><i class=\"far fa-phone-alt\"></i> 05 65 69 54 16</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 11 Avenue de Rodez <br> 12450 La Primaube</p>
                        <p><i class=\"far fa-info-circle\"></i> Prêt-à-porter, Chaussures &amp; Maroquinerie</p>
                    </div>
                </div>

                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>Requista</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565740516\"><i class=\"far fa-phone-alt\"></i> 05 65 74 05 16</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 8 place Général de Gaulle <br> 12170 Requista</p>
                        <p><i class=\"far fa-info-circle\"></i> Chaussures &amp; Maroquinerie</p>
                    </div>
                </div>

                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>Saint-affrique</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565990326\"><i class=\"far fa-phone-alt\"></i> 05 65 99 03 26</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 16 Boulevard Charles de Gaulle <br> 12400 Saint-Affrique</p>
                        <p><i class=\"far fa-info-circle\"></i> Chaussures &amp; Maroquinerie</p>
                    </div>
                </div>

                <div class=\"item\">
                    <div class=\"top-item\">
                        <p>Saint-affrique</p>
                    </div>

                    <div class=\"img-item\">
                        <img src=\"/images/home/stores/home-store-01.jpg\" alt=\"store\">
                    </div>

                    <div class=\"content-item\">
                        <a href=\"tel:0565495068\"><i class=\"far fa-phone-alt\"></i> 05 65 49 50 68</a>
                        <p><i class=\"far fa-map-marker-alt\"></i> 6 Boulevard de la République <br> 12400 Saint-Affrique</p>
                        <p><i class=\"far fa-info-circle\"></i> Prêt-à-porter &amp; Maroquinerie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id=\"newsletter\">
        <div class=\"container\">
            <h2 class=\"title-primary\">Notre newsletter</h2>

            <div class=\"grid-center\">
                <div class=\"col-8_md-10_sm-12\">
                    <p>Envie de découvrir nos nouveaux modèles hyper tendances, <br> nos promotions, nos actus et suivre l’aventure du Carré de la mode ?</p>
                </div>

                <div class=\"col-5_md-8_sm-12\">
                    <div class=\"field\">
                        <input type=\"text\" id=\"chnews-2\" title=\"Inscription Ã  la newsletter\" placeholder=\"Votre adresse e-mail\">
                        <button type=\"button\" onclick=\"RecNews()\" class=\"btn primary\">Je m'inscris</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\RAUL\\Documents\\Perso\\MASTER\\carre_de_la_mode_github\\templates\\home\\index.html.twig");
    }
}
