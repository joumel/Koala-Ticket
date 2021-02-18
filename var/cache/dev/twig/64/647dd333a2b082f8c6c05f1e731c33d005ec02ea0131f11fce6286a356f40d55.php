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
                <p>Vous avez actuellement :</p>
                <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ticketsAnswered"]) || array_key_exists("ticketsAnswered", $context) ? $context["ticketsAnswered"] : (function () { throw new RuntimeError('Variable "ticketsAnswered" does not exist.', 16, $this->source); })())), "html", null, true);
        echo " ticket(s) répondu, ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ticketsPending"]) || array_key_exists("ticketsPending", $context) ? $context["ticketsPending"] : (function () { throw new RuntimeError('Variable "ticketsPending" does not exist.', 16, $this->source); })())), "html", null, true);
        echo " ticket(s) en attente et ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ticketsClosed"]) || array_key_exists("ticketsClosed", $context) ? $context["ticketsClosed"] : (function () { throw new RuntimeError('Variable "ticketsClosed" does not exist.', 16, $this->source); })())), "html", null, true);
        echo " fermé(s)</p>
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
                echo "                            <tr class=\"ticket_night\">
                                <td class=\"start_ticket\"><img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"ticket_img\"><p>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketA"], "owner", [], "any", false, false, false, 42), "lastname", [], "any", false, false, false, 42)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketA"], "owner", [], "any", false, false, false, 42), "firstname", [], "any", false, false, false, 42)), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "statement", [], "any", false, false, false, 46)), "html", null, true);
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
                echo "                            <tr class=\"ticket_night\">
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
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "statement", [], "any", false, false, false, 62)), "html", null, true);
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


        <!-- boite blanche avec la liste des tickets(version mobile)-->
        <div class=\"opened_mobile\">
            <h1>Tickets ouverts</h1>
            ";
        // line 77
        echo "            ";
        if (twig_test_empty((isset($context["ticketsAnswered"]) || array_key_exists("ticketsAnswered", $context) ? $context["ticketsAnswered"] : (function () { throw new RuntimeError('Variable "ticketsAnswered" does not exist.', 77, $this->source); })()))) {
            // line 78
            echo "                <p>Aucun ticket à afficher</p>
            ";
        } else {
            // line 80
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsAnswered"]) || array_key_exists("ticketsAnswered", $context) ? $context["ticketsAnswered"] : (function () { throw new RuntimeError('Variable "ticketsAnswered" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketA"]) {
                // line 81
                echo "                        <div class=\"ticket_box\">
                            <p>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "title", [], "any", false, false, false, 82), "html", null, true);
                echo "</p>
                            <p>Dernière réponse le ";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "updateTime", [], "any", false, false, false, 83), "d/m/Y à H\\hi"), "html", null, true);
                echo "</p>
                            <a href=\"\" class=\"primary_btn_success\">";
                // line 84
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketA"], "statement", [], "any", false, false, false, 84)), "html", null, true);
                echo "</a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            ";
        }
        // line 88
        echo "
            ";
        // line 90
        echo "            ";
        if (twig_test_empty((isset($context["ticketsPending"]) || array_key_exists("ticketsPending", $context) ? $context["ticketsPending"] : (function () { throw new RuntimeError('Variable "ticketsPending" does not exist.', 90, $this->source); })()))) {
            // line 91
            echo "                <p>Aucun ticket à afficher</p>
            ";
        } else {
            // line 93
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsPending"]) || array_key_exists("ticketsPending", $context) ? $context["ticketsPending"] : (function () { throw new RuntimeError('Variable "ticketsPending" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketP"]) {
                // line 94
                echo "                        <div class=\"ticket_box\">
                            <p>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "title", [], "any", false, false, false, 95), "html", null, true);
                echo "</p>
                            <p>Dernière réponse le ";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "updateTime", [], "any", false, false, false, 96), "d/m/Y à H\\hi"), "html", null, true);
                echo "</p>
                            <a href=\"\" class=\"primary_btn_success\">";
                // line 97
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketP"], "statement", [], "any", false, false, false, 97)), "html", null, true);
                echo "</a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            ";
        }
        // line 101
        echo "        </div>


        <!-- boite blanche avec la liste des tickets fermés (version mobile)-->
            <div class=\"opened_mobile\">
                <h1>Tickets fermés</h1>
                ";
        // line 108
        echo "                ";
        if (twig_test_empty((isset($context["ticketsClosed"]) || array_key_exists("ticketsClosed", $context) ? $context["ticketsClosed"] : (function () { throw new RuntimeError('Variable "ticketsClosed" does not exist.', 108, $this->source); })()))) {
            // line 109
            echo "                <p>Aucun ticket à afficher</p>
            ";
        } else {
            // line 111
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsClosed"]) || array_key_exists("ticketsClosed", $context) ? $context["ticketsClosed"] : (function () { throw new RuntimeError('Variable "ticketsClosed" does not exist.', 111, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketC"]) {
                // line 112
                echo "                        <div class=\"ticket_box\">
                            <p>";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "title", [], "any", false, false, false, 113), "html", null, true);
                echo "</p>
                            <p>Dernière réponse le ";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "updateTime", [], "any", false, false, false, 114), "d/m/Y à H\\hi"), "html", null, true);
                echo "</p>
                            <a href=\"\" class=\"primary_btn_success\">";
                // line 115
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "statement", [], "any", false, false, false, 115)), "html", null, true);
                echo "</a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            ";
        }
        // line 119
        echo "            </div>

        <!-- boite blanche avec la liste des tickets -->
        <div class=\"opened\">
            <h1>Tickets fermés</h1>

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
        // line 137
        echo "                    ";
        if (twig_test_empty((isset($context["ticketsClosed"]) || array_key_exists("ticketsClosed", $context) ? $context["ticketsClosed"] : (function () { throw new RuntimeError('Variable "ticketsClosed" does not exist.', 137, $this->source); })()))) {
            // line 138
            echo "                        <p>Aucun ticket à afficher</p>
                    ";
        } else {
            // line 140
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketsClosed"]) || array_key_exists("ticketsClosed", $context) ? $context["ticketsClosed"] : (function () { throw new RuntimeError('Variable "ticketsClosed" does not exist.', 140, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketC"]) {
                // line 141
                echo "                            <tr class=\"ticket_night\">
                                <td class=\"start_ticket\"><img src=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"ticket_img\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketC"], "owner", [], "any", false, false, false, 142), "lastname", [], "any", false, false, false, 142), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticketC"], "owner", [], "any", false, false, false, 142), "firstname", [], "any", false, false, false, 142), "html", null, true);
                echo " <br> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "updateTime", [], "any", false, false, false, 142), "d/m/Y à H\\hi"), "html", null, true);
                echo " </p></td>
                                <td>";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "title", [], "any", false, false, false, 143), "html", null, true);
                echo "</td>
                                <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "creationDate", [], "any", false, false, false, 144), "d/m/Y à H\\hi"), "html", null, true);
                echo "</td>
                                <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "id", [], "any", false, false, false, 145), "html", null, true);
                echo "</td>
                                <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">";
                // line 146
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketC"], "statement", [], "any", false, false, false, 146)), "html", null, true);
                echo "</a></td>
                                <tr style=\"height: 10px; background-color: transparent;\"></tr>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                    ";
        }
        // line 151
        echo "                </tbody>
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
        return array (  444 => 151,  441 => 150,  431 => 146,  427 => 145,  423 => 144,  419 => 143,  409 => 142,  406 => 141,  401 => 140,  397 => 138,  394 => 137,  375 => 119,  372 => 118,  363 => 115,  359 => 114,  355 => 113,  352 => 112,  347 => 111,  343 => 109,  340 => 108,  332 => 101,  329 => 100,  320 => 97,  316 => 96,  312 => 95,  309 => 94,  304 => 93,  300 => 91,  297 => 90,  294 => 88,  291 => 87,  282 => 84,  278 => 83,  274 => 82,  271 => 81,  266 => 80,  262 => 78,  259 => 77,  248 => 67,  245 => 66,  235 => 62,  231 => 61,  227 => 60,  223 => 59,  213 => 58,  210 => 57,  205 => 56,  201 => 54,  198 => 53,  195 => 51,  192 => 50,  182 => 46,  178 => 45,  174 => 44,  170 => 43,  160 => 42,  157 => 41,  152 => 40,  148 => 38,  145 => 37,  118 => 16,  111 => 11,  101 => 10,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
                <p>Vous avez actuellement :</p>
                <p>{{ ticketsAnswered|length }} ticket(s) répondu, {{ ticketsPending|length }} ticket(s) en attente et {{ ticketsClosed|length }} fermé(s)</p>
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
                                <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>{{ ticketA.owner.lastname|capitalize }} {{ ticketA.owner.firstname|capitalize }}<br>{{ ticketA.updateTime|date('d/m/Y à H\\\\hi') }}</p></td>
                                <td>{{ticketA.title}}</td>
                                <td>{{ ticketA.creationDate|date('d/m/Y à H\\\\hi') }}</td>
                                <td>{{ ticketA.id }}</td>
                                <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">{{ ticketA.statement|capitalize }}</a></td>
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
                                <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_success\">{{ ticketP.statement|capitalize }}</a></td>
                                <tr style=\"height: 10px; background-color: transparent;\"></tr>
                            </tr>
                        {% endfor %}
                    {% endif %}
                </tbody>
            </table>
        </div>
        <!-- boite blanche avec la liste des tickets -->


        <!-- boite blanche avec la liste des tickets(version mobile)-->
        <div class=\"opened_mobile\">
            <h1>Tickets ouverts</h1>
            {# Affichage des tickets répondus #}
            {% if ticketsAnswered is empty %}
                <p>Aucun ticket à afficher</p>
            {% else %}
                    {% for ticketA in ticketsAnswered %}
                        <div class=\"ticket_box\">
                            <p>{{ ticketA.title }}</p>
                            <p>Dernière réponse le {{ ticketA.updateTime|date('d/m/Y à H\\\\hi') }}</p>
                            <a href=\"\" class=\"primary_btn_success\">{{ ticketA.statement|capitalize }}</a>
                        </div>
                    {% endfor %}
            {% endif %}

            {# Affichage des tickets en attente #}
            {% if ticketsPending is empty %}
                <p>Aucun ticket à afficher</p>
            {% else %}
                    {% for ticketP in ticketsPending %}
                        <div class=\"ticket_box\">
                            <p>{{ ticketP.title }}</p>
                            <p>Dernière réponse le {{ ticketP.updateTime|date('d/m/Y à H\\\\hi') }}</p>
                            <a href=\"\" class=\"primary_btn_success\">{{ ticketP.statement|capitalize }}</a>
                        </div>
                    {% endfor %}
            {% endif %}
        </div>


        <!-- boite blanche avec la liste des tickets fermés (version mobile)-->
            <div class=\"opened_mobile\">
                <h1>Tickets fermés</h1>
                {# Affichage des tickets fermés #}
                {% if ticketsClosed is empty %}
                <p>Aucun ticket à afficher</p>
            {% else %}
                    {% for ticketC in ticketsClosed %}
                        <div class=\"ticket_box\">
                            <p>{{ ticketC.title }}</p>
                            <p>Dernière réponse le {{ ticketC.updateTime|date('d/m/Y à H\\\\hi') }}</p>
                            <a href=\"\" class=\"primary_btn_success\">{{ ticketC.statement|capitalize }}</a>
                        </div>
                    {% endfor %}
            {% endif %}
            </div>

        <!-- boite blanche avec la liste des tickets -->
        <div class=\"opened\">
            <h1>Tickets fermés</h1>

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
                    {# Affichage des tickets fermés #}
                    {% if ticketsClosed is empty %}
                        <p>Aucun ticket à afficher</p>
                    {% else %}
                        {% for ticketC in ticketsClosed %}
                            <tr class=\"ticket_night\">
                                <td class=\"start_ticket\"><img src=\"{{ asset('images/user.jpg') }}\" alt=\"\" class=\"ticket_img\"><p>{{ ticketC.owner.lastname }} {{ ticketC.owner.firstname }} <br> {{ ticketC.updateTime|date('d/m/Y à H\\\\hi') }} </p></td>
                                <td>{{ ticketC.title }}</td>
                                <td>{{ ticketC.creationDate|date('d/m/Y à H\\\\hi') }}</td>
                                <td>{{ ticketC.id }}</td>
                                <td class=\"end_ticket\"><a href=\"\" class=\"primary_btn_close\">{{ ticketC.statement|capitalize }}</a></td>
                                <tr style=\"height: 10px; background-color: transparent;\"></tr>
                            </tr>
                        {% endfor %}
                    {% endif %}
                </tbody>
            </table>
        </div>
        <!-- boite blanche avec la liste des tickets -->
    </section>

{% endblock %}
", "main/dash_admin.html.twig", "C:\\Users\\Nivas\\Documents\\GitHub\\project\\templates\\main\\dash_admin.html.twig");
    }
}
