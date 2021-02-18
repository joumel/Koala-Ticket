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

/* main/ticket.html.twig */
class __TwigTemplate_11e47964becac5104909d79c9b3d277854a56438c52599ab4d400d0de0e39de3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/ticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/ticket.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/ticket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Créer un ticket";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<body>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 9
            echo "        <div class=\"login_errors\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <div class=\"ticket_sizing\">
        <div class=\"ticket_page\">
            <form class=\"ticket_form\" name=\"ticket\" method=\"POST\" novalidate=\"novalidate\">
                <h1>Vous rencontrez un problème ? Dites-nous tout.</h1>
                <div class=\"login_input_full input_size_ticket\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'widget');
        echo "
                </div>
                <div class=\"login_input_full input_size_ticket\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19), 'widget');
        echo "
                </div>
                <div class=\"level_depart\">
                    <div class=\"login_input_full input_size_ticket\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "level", [], "any", false, false, false, 23), 'widget');
        echo "
                    </div>
                    <div class=\"login_input_full input_size_ticket\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "department", [], "any", false, false, false, 26), 'widget');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "statement", [], "any", false, false, false, 27), 'widget');
        echo "
                    </div>
                </div>
                <button type=\"submit\" class=\"login_button input_size_ticket\">Ouvrir un ticket</button>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "_token", [], "any", false, false, false, 31), 'row');
        echo "
            </form>
            <div class=\"ticket_information\">
                <h1>Concernant notre support</h1>
                <div class=\"ticket_information_box no_top_margin\">
                    <i class=\"fas fa-clock\"></i>
                    <p>Notre service est ouvert du lundi au vendredi de 9h à 14h.</p>
                </div>
                <div class=\"ticket_information_box\">
                    <i class=\"fas fa-info-circle\"></i>
                    <p>Vous aurez une réponse sous 2 jours ouvrés</p>
                </div>
                <div class=\"ticket_information_box\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    <p>N'abusez pas de la priorité, soyez honnête</p>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 31,  135 => 27,  131 => 26,  125 => 23,  118 => 19,  112 => 16,  105 => 11,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un ticket{% endblock %}

{% block body %}

<body>
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"login_errors\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}
    <div class=\"ticket_sizing\">
        <div class=\"ticket_page\">
            <form class=\"ticket_form\" name=\"ticket\" method=\"POST\" novalidate=\"novalidate\">
                <h1>Vous rencontrez un problème ? Dites-nous tout.</h1>
                <div class=\"login_input_full input_size_ticket\">
                    {{ form_widget(form.title) }}
                </div>
                <div class=\"login_input_full input_size_ticket\">
                    {{ form_widget(form.content) }}
                </div>
                <div class=\"level_depart\">
                    <div class=\"login_input_full input_size_ticket\">
                        {{ form_widget(form.level) }}
                    </div>
                    <div class=\"login_input_full input_size_ticket\">
                        {{ form_widget(form.department) }}
                        {{ form_widget(form.statement) }}
                    </div>
                </div>
                <button type=\"submit\" class=\"login_button input_size_ticket\">Ouvrir un ticket</button>
                {{ form_row(form._token) }}
            </form>
            <div class=\"ticket_information\">
                <h1>Concernant notre support</h1>
                <div class=\"ticket_information_box no_top_margin\">
                    <i class=\"fas fa-clock\"></i>
                    <p>Notre service est ouvert du lundi au vendredi de 9h à 14h.</p>
                </div>
                <div class=\"ticket_information_box\">
                    <i class=\"fas fa-info-circle\"></i>
                    <p>Vous aurez une réponse sous 2 jours ouvrés</p>
                </div>
                <div class=\"ticket_information_box\">
                    <i class=\"fas fa-exclamation-triangle\"></i>
                    <p>N'abusez pas de la priorité, soyez honnête</p>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "main/ticket.html.twig", "C:\\laragon\\www\\project\\templates\\main\\ticket.html.twig");
    }
}
