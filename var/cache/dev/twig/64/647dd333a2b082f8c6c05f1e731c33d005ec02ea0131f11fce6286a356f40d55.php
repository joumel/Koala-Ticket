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

/* main/dash_admin.html.twig */
class __TwigTemplate_0c5d8190fcf2d61defe2716705cc57168fd675002625f6153c8022078bf58db3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'articles' => [$this, 'block_articles'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/dash_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/dash_admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/dash_admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articles"));

        // line 4
        echo "<!-- Affichage des articles -->
<div class=\"line_horizontal margin_line \"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <section class=\"statut_top\">
        <div class=\"statut\">
            <div class=\"statut_text margin_text\">
                <p>Vous avez actuellement</p>
                <p>7 tickets ouverts</p>
            </div>
        </div>
    </section>
    <section class=\"ticket\">

        <!-- boite blanche avec la liste des tickets -->
        <div class=\"opened\">
            <h1>Tickets ouverts</h1>
            <table class=\"test\">
                <thead>
                    <tr class=\"opened_title\">
                        <td class=\"start_ticket\">Dernière réponse</td>
                        <td>Sujet</td>
                        <td>Création</td>
                        <td>Numéro</td>
                        <td class=\"end_ticket\">Etat du ticket</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- boite blanche avec la liste des tickets -->

        
        <!-- boite blanche avec la liste des tickets (version mobile)-->
        <div class=\"opened_mobile\">
            <h1>Tickets ouverts</h1>
            <div class=\"ticket_box\">
                <p>Je n'arrive pas à me connecter à mon compte client</p>
                <p>Dernière réponse le 07/10/2020</p>
                <a href=\"\" class=\"primary_btn_success\">Répondu</a>
            </div>
        </div>
        <!-- boite blanche avec la liste des tickets -->


        <!-- boite blanche avec la liste des tickets -->
        <div class=\"opened\">
            <h1>Tickets fermé</h1>

            <table class=\"test\">
                <thead>
                    <tr class=\"opened_title\">
                        <td class=\"start_ticket\">Dernière réponse</td>
                        <td>Sujet</td>
                        <td>Création</td>
                        <td>Numéro</td>
                        <td class=\"end_ticket\">Etat du ticket</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- boite blanche avec la liste des tickets -->
        
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/dash_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 11,  101 => 10,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block articles %}
<!-- Affichage des articles -->
<div class=\"line_horizontal margin_line \"></div>
{% endblock %}

{% block title %}Administration{% endblock %}

{% block body %}

    <section class=\"statut_top\">
        <div class=\"statut\">
            <div class=\"statut_text margin_text\">
                <p>Vous avez actuellement</p>
                <p>7 tickets ouverts</p>
            </div>
        </div>
    </section>
    <section class=\"ticket\">

        <!-- boite blanche avec la liste des tickets -->
        <div class=\"opened\">
            <h1>Tickets ouverts</h1>
            <table class=\"test\">
                <thead>
                    <tr class=\"opened_title\">
                        <td class=\"start_ticket\">Dernière réponse</td>
                        <td>Sujet</td>
                        <td>Création</td>
                        <td>Numéro</td>
                        <td class=\"end_ticket\">Etat du ticket</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">Répondu</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- boite blanche avec la liste des tickets -->

        
        <!-- boite blanche avec la liste des tickets (version mobile)-->
        <div class=\"opened_mobile\">
            <h1>Tickets ouverts</h1>
            <div class=\"ticket_box\">
                <p>Je n'arrive pas à me connecter à mon compte client</p>
                <p>Dernière réponse le 07/10/2020</p>
                <a href=\"\" class=\"primary_btn_success\">Répondu</a>
            </div>
        </div>
        <!-- boite blanche avec la liste des tickets -->


        <!-- boite blanche avec la liste des tickets -->
        <div class=\"opened\">
            <h1>Tickets fermé</h1>

            <table class=\"test\">
                <thead>
                    <tr class=\"opened_title\">
                        <td class=\"start_ticket\">Dernière réponse</td>
                        <td>Sujet</td>
                        <td>Création</td>
                        <td>Numéro</td>
                        <td class=\"end_ticket\">Etat du ticket</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr>
                        <td class=\"start_ticket\"><img src=\"images/user.jpg\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- boite blanche avec la liste des tickets -->
        
    </section>

{% endblock %}
", "main/dash_admin.html.twig", "C:\\laragon\\www\\project\\templates\\main\\dash_admin.html.twig");
    }
}
