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

/* shop/index.html.twig */
class __TwigTemplate_d37cd1989fe44571aff1be99cb566807577d11c3203f7086a90b4c9c6a0d84e0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Shop ";
        
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
        <div class=\"row\">
            <div class=\"col-lg-10\">
                <div class=\"row\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4 rounded-0\">
                            <div class=\"card rounded-0\">
                                <img class=\"card-img rounded-0 img-fluid\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/productImage/default.png"), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"card-body\">
                                <a class=\"justify-content-center h5 text-decoration-none\" href=\"\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productName", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                                <p class=\"mb-0\">";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 18), 2, ",", "."), "html", null, true);
            echo " l</p>
                                <br>
                                <h1 class=\"pb-4 text-end fw-bold\">";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "retailPrice", [], "any", false, false, false, 20), 2, ",", "."), "html", null, true);
            echo " €</h1>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col-md-2 justify-content-start\">
                                        <button class=\"btn btn-success rounded-1\"><i class=\"lar la-eye\"></i></button>
                                    </div>
                                    <div class=\"col-md-8 justify-content-end\">
                                        <button class=\"btn btn-success rounded-1\"><i class=\"las la-cart-arrow-down\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  103 => 20,  98 => 18,  94 => 17,  88 => 14,  83 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Shop {% endblock %}

{% block body %}
    <div class=\"container py-3\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
                <div class=\"row\">
                    {% for product in products %}
                    <div class=\"col-md-4\">
                        <div class=\"card mb-4 rounded-0\">
                            <div class=\"card rounded-0\">
                                <img class=\"card-img rounded-0 img-fluid\" src=\"{{ asset('img/productImage/default.png') }}\">
                            </div>
                            <div class=\"card-body\">
                                <a class=\"justify-content-center h5 text-decoration-none\" href=\"\">{{ product.productName }}</a>
                                <p class=\"mb-0\">{{ product.weight|number_format(2, ',', '.')}} l</p>
                                <br>
                                <h1 class=\"pb-4 text-end fw-bold\">{{ product.retailPrice|number_format(2, ',', '.') }} €</h1>
                                <br>
                                <div class=\"row\">
                                    <div class=\"col-md-2 justify-content-start\">
                                        <button class=\"btn btn-success rounded-1\"><i class=\"lar la-eye\"></i></button>
                                    </div>
                                    <div class=\"col-md-8 justify-content-end\">
                                        <button class=\"btn btn-success rounded-1\"><i class=\"las la-cart-arrow-down\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "shop/index.html.twig", "/var/www/projects/vinothek/templates/shop/index.html.twig");
    }
}
