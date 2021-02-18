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

/* main/faq.html.twig */
class __TwigTemplate_a8259683ba749f7eda7303efb476eac46baf1d6d22576573d2b9b1fb46192312 extends Template
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
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/faq.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "FAQ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body>
    <!-- Partie FAQ -->
    <h1 id=\"title-faq\">Frequently Asked Questions</h1>

    <!-- Container des questions -->
    <div class=\"container-faq\">
        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus.jpg"), "html", null, true);
        echo "\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus.jpg"), "html", null, true);
        echo "\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus.jpg"), "html", null, true);
        echo "\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus.jpg"), "html", null, true);
        echo "\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus.jpg"), "html", null, true);
        echo "\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis assumenda amet corrupti tempore ut inventore velit earum beatae vero ea voluptate aut laudantium dolorem facilis veritatis, voluptatem alias quidem architecto?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plus.jpg"), "html", null, true);
        echo "\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi voluptate praesentium. Obcaecati veniam error similique dolore quos adipisci maiores at sint consequuntur. Velit ipsa neque officiis asperiores maiores fugiat.</p>
            </div>
        </div>
    </div>
    ";
        // line 76
        $this->displayBlock('js', $context, $blocks);
        // line 77
        echo "</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/faq.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 76,  183 => 77,  181 => 76,  170 => 68,  156 => 57,  142 => 46,  128 => 35,  114 => 24,  100 => 13,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}FAQ{% endblock %}
    {% block body %}
    <body>
    <!-- Partie FAQ -->
    <h1 id=\"title-faq\">Frequently Asked Questions</h1>

    <!-- Container des questions -->
    <div class=\"container-faq\">
        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"{{ asset('images/plus.jpg')}}\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"{{ asset('images/plus.jpg')}}\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"{{ asset('images/plus.jpg')}}\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"{{ asset('images/plus.jpg')}}\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"{{ asset('images/plus.jpg')}}\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis assumenda amet corrupti tempore ut inventore velit earum beatae vero ea voluptate aut laudantium dolorem facilis veritatis, voluptatem alias quidem architecto?</p>
            </div>
        </div>

        <div class=\"questions\">
            <div class=\"visible-pannel\">
                <h2>Lorem ipsum dolor sit amet ?</h2>
                <img src=\"{{ asset('images/plus.jpg')}}\" alt=\"croix-animation\" class=\"img-cross\">
            </div>
            <div class=\"toggle-pannel\">
                <h4>Lorem ipsum dolor sit.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, exercitationem illo accusamus cumque veniam ab labore officia. Voluptatem, harum doloribus? Molestiae modi esse eaque sapiente deserunt quis accusamus excepturi culpa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi voluptate praesentium. Obcaecati veniam error similique dolore quos adipisci maiores at sint consequuntur. Velit ipsa neque officiis asperiores maiores fugiat.</p>
            </div>
        </div>
    </div>
    {% block js %}<script src=\"{{ asset('js/faq.js') }}\"></script>{% endblock %}
</body>
{% endblock %}



", "main/faq.html.twig", "C:\\laragon\\www\\project\\templates\\main\\faq.html.twig");
    }
}
