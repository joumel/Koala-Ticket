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

/* registration/register.html.twig */
class __TwigTemplate_ea19f3dbc13a68dce9ce225a1ca1a1570c50fc1ed232a4870eca1909b933a579 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Koala Ticket - Connexion</title>
    <link href=\"https://fonts.googleapis.com/css?family=Roboto&amp;display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/master.css"), "html", null, true);
        echo "\">

    ";
        // line 14
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "</head>

<body class=\"login\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 19
            echo "        <div class=\"login_errors\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <form class=\"login_form m_margin_top\" name=\"registration_form\" method=\"POST\" novalidate=\"novalidate\">
        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/koala.png"), "html", null, true);
        echo "\" class=\"login_logo\">
        <div class=\"error_msg\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "firstname", [], "any", false, false, false, 25), 'errors');
        echo "
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-user\"></i>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "firstname", [], "any", false, false, false, 29), 'widget');
        echo "
        </div>
        <div class=\"error_msg\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "lastname", [], "any", false, false, false, 32), 'errors');
        echo "
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-user\"></i>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "lastname", [], "any", false, false, false, 36), 'widget');
        echo "
        </div>
        <div class=\"error_msg\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'errors');
        echo "
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-envelope-open\"></i>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget');
        echo "
        </div>
        <div class=\"error_msg\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), 'errors');
        echo "
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-unlock-alt\"></i>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), 'widget');
        echo "
        </div>
        <div class=\"checkbox_agree\"><label for=\"registration_form_agreeTerms\" class=\"required\">J'accepte <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cgu"), "html", null, true);
        echo "\" class=\"cgu_link\">les conditions générales</a></label><input type=\"checkbox\" id=\"registration_form_agreeTerms\" name=\"registration_form[agreeTerms]\" required=\"required\" value=\"1\"></div>

        <button type=\"submit\" class=\"login_button\">Inscription</button>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "_token", [], "any", false, false, false, 55), 'row');
        echo "
    </form>
    <div class=\"login_form m_margin_none\">
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login"), "html", null, true);
        echo "\" class=\"already_account_link\">J'ai déjà un compte <i class=\"fas fa-arrow-right\"></i></a>
    </div>
</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 14,  155 => 58,  149 => 55,  143 => 52,  138 => 50,  131 => 46,  125 => 43,  118 => 39,  112 => 36,  105 => 32,  99 => 29,  92 => 25,  87 => 23,  83 => 21,  74 => 19,  70 => 18,  65 => 15,  62 => 14,  57 => 11,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentRoute = app.request.attributes.get('_route') %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Koala Ticket - Connexion</title>
    <link href=\"https://fonts.googleapis.com/css?family=Roboto&amp;display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/master.css') }}\">

    {# Inclusion des fichiers CSS individuel de la page #}
    {% block css %}{% endblock %}
</head>

<body class=\"login\">
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"login_errors\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

    <form class=\"login_form m_margin_top\" name=\"registration_form\" method=\"POST\" novalidate=\"novalidate\">
        <img src=\"{{ asset('images/koala.png')}}\" class=\"login_logo\">
        <div class=\"error_msg\">
            {{ form_errors(registrationForm.firstname) }}
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-user\"></i>
            {{ form_widget(registrationForm.firstname) }}
        </div>
        <div class=\"error_msg\">
            {{ form_errors(registrationForm.lastname) }}
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-user\"></i>
            {{ form_widget(registrationForm.lastname) }}
        </div>
        <div class=\"error_msg\">
            {{ form_errors(registrationForm.email) }}
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-envelope-open\"></i>
            {{ form_widget(registrationForm.email) }}
        </div>
        <div class=\"error_msg\">
            {{ form_errors(registrationForm.plainPassword) }}
        </div>
        <div class=\"login_input_full\">
            <i class=\"fas fa-unlock-alt\"></i>
            {{ form_widget(registrationForm.plainPassword) }}
        </div>
        <div class=\"checkbox_agree\"><label for=\"registration_form_agreeTerms\" class=\"required\">J'accepte <a href=\"{{ asset('cgu')}}\" class=\"cgu_link\">les conditions générales</a></label><input type=\"checkbox\" id=\"registration_form_agreeTerms\" name=\"registration_form[agreeTerms]\" required=\"required\" value=\"1\"></div>

        <button type=\"submit\" class=\"login_button\">Inscription</button>
        {{ form_row(registrationForm._token) }}
    </form>
    <div class=\"login_form m_margin_none\">
        <a href=\"{{ asset('login') }}\" class=\"already_account_link\">J'ai déjà un compte <i class=\"fas fa-arrow-right\"></i></a>
    </div>
</body>
", "registration/register.html.twig", "C:\\laragon\\www\\project\\templates\\registration\\register.html.twig");
    }
}
