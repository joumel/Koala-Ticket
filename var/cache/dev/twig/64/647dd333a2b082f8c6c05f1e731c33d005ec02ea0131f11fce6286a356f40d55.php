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
                    ";
        // line 37
        echo "                    ";
        if (twig_test_empty((isset($context["ticketsAnswered"]) || array_key_exists("ticketsAnswered", $context) ? $context["ticketsAnswered"] : (function () { throw new RuntimeError('Variable "ticketsAnswered" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "                        <p>Aucun ticket à afficher</p>
                    ";
        } else {
            // line 40
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsAnswered"]) || array_key_exists("ticketsAnswered", $context) ? $context["ticketsAnswered"] : (function () { throw new RuntimeError('Variable "ticketsAnswered" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketA"]) {
                // line 41
                echo "                        <tr class=\"ticket_night\">
                            <td class=\"start_ticket\"><img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"ticket_img\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketA"], "owner", [], "any", false, false, false, 42), "lastname", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketA"], "owner", [], "any", false, false, false, 42), "firstname", [], "any", false, false, false, 42), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "updateTime", [], "any", false, false, false, 42), "d/m/Y à H\\hi"), "html", null, true);
                echo "</p></td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "title", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "creationDate", [], "any", false, false, false, 44), "d/m/Y à H\\hi"), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                            <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "statement", [], "any", false, false, false, 46), "html", null, true);
                echo "</a></td>
                            <tr style=\"height: 10px; background-color: transparent;\"></tr>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    ";
        }
        // line 51
        echo "
                    ";
        // line 53
        echo "                    ";
        if (twig_test_empty((isset($context["ticketsPending"]) || array_key_exists("ticketsPending", $context) ? $context["ticketsPending"] : (function () { throw new RuntimeError('Variable "ticketsPending" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                        <p>Aucun ticket à afficher</p>
                    ";
        } else {
            // line 56
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsPending"]) || array_key_exists("ticketsPending", $context) ? $context["ticketsPending"] : (function () { throw new RuntimeError('Variable "ticketsPending" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketP"]) {
                // line 57
                echo "                        <tr class=\"ticket_night\">
                            <td class=\"start_ticket\"><img src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"ticket_img\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketP"], "owner", [], "any", false, false, false, 58), "lastname", [], "any", false, false, false, 58), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketP"], "owner", [], "any", false, false, false, 58), "firstname", [], "any", false, false, false, 58), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "updateTime", [], "any", false, false, false, 58), "d/m/Y à H\\hi"), "html", null, true);
                echo "</p></td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "title", [], "any", false, false, false, 59), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "creationDate", [], "any", false, false, false, 60), "d/m/Y à H\\hi"), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                            <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "statement", [], "any", false, false, false, 62), "html", null, true);
                echo "</a></td>
                            <tr style=\"height: 10px; background-color: transparent;\"></tr>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                </tbody>
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
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
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
        return array (  310 => 125,  299 => 117,  288 => 109,  277 => 101,  241 => 67,  238 => 66,  228 => 62,  224 => 61,  220 => 60,  216 => 59,  206 => 58,  203 => 57,  198 => 56,  194 => 54,  191 => 53,  188 => 51,  185 => 50,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  153 => 42,  150 => 41,  145 => 40,  141 => 38,  138 => 37,  111 => 11,  101 => 10,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
                    {# Affichage des tickets répondus #}
                    {% if ticketsAnswered is empty %}
                        <p>Aucun ticket à afficher</p>
                    {% else %}
                        {% for ticketA in ticketsAnswered %}
                        <tr class=\"ticket_night\">
                            <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>{{ ticketA.owner.lastname }} {{ ticketA.owner.firstname }}<br>{{ ticketA.updateTime|date('d/m/Y à H\\\\hi') }}</p></td>
                            <td>{{ticketA.title}}</td>
                            <td>{{ ticketA.creationDate|date('d/m/Y à H\\\\hi') }}</td>
                            <td>{{ ticketA.id }}</td>
                            <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">{{ ticketA.statement }}</a></td>
                            <tr style=\"height: 10px; background-color: transparent;\"></tr>
                        </tr>
                        {% endfor %}
                    {% endif %}

                    {# Affichage des tickets en attente #}
                    {% if ticketsPending is empty %}
                        <p>Aucun ticket à afficher</p>
                    {% else %}
                        {% for ticketP in ticketsPending %}
                        <tr class=\"ticket_night\">
                            <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>{{ ticketP.owner.lastname }} {{ ticketP.owner.firstname }}<br>{{ ticketP.updateTime|date('d/m/Y à H\\\\hi') }}</p></td>
                            <td>{{ticketP.title}}</td>
                            <td>{{ ticketP.creationDate|date('d/m/Y à H\\\\hi') }}</td>
                            <td>{{ ticketP.id }}</td>
                            <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">{{ ticketP.statement }}</a></td>
                            <tr style=\"height: 10px; background-color: transparent;\"></tr>
                        </tr>
                        {% endfor %}
                    {% endif %}
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
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
                        <td>Impossible d'accéder à mon espace client</td>
                        <td>Le 10/10/2020</td>
                        <td>#234423</td>
                        <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">Fermé</a></td>
                        <tr style=\"height: 10px; background-color: transparent;\"></tr>
                    </tr>
                    <tr class=\"ticket_night\">
                        <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>Lucas <br> Le 10/10/2020</p></td>
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
