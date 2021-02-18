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

/* main/article.html.twig */
class __TwigTemplate_fa0b6ac61ed8c465aa7207aac354715a7fee990e1536f83746d005bde659bcfd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/article.html.twig", 1);
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

        echo "Nom de l'Article";
        
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
<!-- Page d'un Article-->
<main>
    <h1 class=\"title-page-article\">Nom de l'Article</h1>
    <a class=\"link-all-articles\" href=\"#\">Retour à la liste des articles</a>
    <div class=\"article-page\">
        <p class=\"header-page-article\">- Publié le 15/02/2021 à 18h45 par Auteur</p>
        <div class=\"body-card-article\">
            <h3>Titre de l'article</h3>
            <p>Corps de l'article : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <h2 class=\"title-h2-article\">Commentaires (Nombres)</h2>
    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nom de l'Article{% endblock %}

{% block body %}

<!-- Page d'un Article-->
<main>
    <h1 class=\"title-page-article\">Nom de l'Article</h1>
    <a class=\"link-all-articles\" href=\"#\">Retour à la liste des articles</a>
    <div class=\"article-page\">
        <p class=\"header-page-article\">- Publié le 15/02/2021 à 18h45 par Auteur</p>
        <div class=\"body-card-article\">
            <h3>Titre de l'article</h3>
            <p>Corps de l'article : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <h2 class=\"title-h2-article\">Commentaires (Nombres)</h2>
    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>

    <div class=\"comments-article\">
        <p class=\"header-page-article\">- Ajouté par AUTEUR le DATE</p>
        <div class=\"body-card-article\">
            <p>Contenu du commentaire : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam vitae? Nulla rem itaque maxime odio. Quis esse, quaerat iure itaque harum sint perferendis cum debitis autem dolores, eligendi ut.</p>
        </div>
    </div>
</main>

{% endblock %}
", "main/article.html.twig", "C:\\Users\\Nivas\\Documents\\GitHub\\project\\templates\\main\\article.html.twig");
    }
}
