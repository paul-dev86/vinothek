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

/* product/index.html.twig */
class __TwigTemplate_73962277b336e08bbc9eaead08b7dc4b634770eae07b5eacb5724af9335e5ed9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Produktübersicht ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container py-3\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <td>Artikel Nr.</td>
                    <td>Produkt Name</td>
                    <td>Beschreibung</td>
                    <td>Einkaufspreis</td>
                    <td>Verkaufspreis</td>
                    <td>Gewicht / Inhalt</td>
                    <td>Hersteller</td>
                    <td>Rebsorte</td>
                    <td>Herkunft</td>
                    <td>Löschen</td>
                    <td>Bearbeiten</td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productNumber", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productInfo", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productPrice", [], "any", false, false, false, 29), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "retailPrice", [], "any", false, false, false, 30), 2, ",", "."), "html", null, true);
            echo " €</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 31), 2, ",", "."), "html", null, true);
            echo " l / kg</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "company", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "vine", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "country", [], "any", false, false, false, 34) . " ") . twig_get_attribute($this->env, $this->source, $context["product"], "region", [], "any", false, false, false, 34)), "html", null, true);
            echo "</td>
                    <td><button class=\"btn btn-danger\">";
            // line 35
            echo " <i class=\"lar la-trash-alt\"></i></button></td>
                    <td><button class=\"btn btn-primary\">";
            // line 36
            echo " <i class=\"lar la-edit\"></i></button></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  139 => 36,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  97 => 25,  93 => 24,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Produktübersicht {% endblock %}

{% block body %}
    <div class=\"container py-3\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <td>Artikel Nr.</td>
                    <td>Produkt Name</td>
                    <td>Beschreibung</td>
                    <td>Einkaufspreis</td>
                    <td>Verkaufspreis</td>
                    <td>Gewicht / Inhalt</td>
                    <td>Hersteller</td>
                    <td>Rebsorte</td>
                    <td>Herkunft</td>
                    <td>Löschen</td>
                    <td>Bearbeiten</td>
                </tr>
            </thead>
            <tbody>
                {% for product in products %}
                <tr>
                    <td>{{ product.productNumber }}</td>
                    <td>{{ product.productName }}</td>
                    <td>{{ product.productInfo }}</td>
                    <td>{{ product.productPrice|number_format(2, ',', '.') }} €</td>
                    <td>{{ product.retailPrice|number_format(2, ',', '.') }} €</td>
                    <td>{{ product.weight|number_format(2, ',', '.') }} l / kg</td>
                    <td>{{ product.company }}</td>
                    <td>{{ product.vine }}</td>
                    <td>{{ product.country ~ ' ' ~ product.region }}</td>
                    <td><button class=\"btn btn-danger\">{# product. #} <i class=\"lar la-trash-alt\"></i></button></td>
                    <td><button class=\"btn btn-primary\">{# product. #} <i class=\"lar la-edit\"></i></button></td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "product/index.html.twig", "/var/www/projects/vinothek/templates/product/index.html.twig");
    }
}
