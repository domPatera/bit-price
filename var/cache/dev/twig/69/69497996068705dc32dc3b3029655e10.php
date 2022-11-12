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

/* bitcoin/index.html.twig */
class __TwigTemplate_2dbc268f762d80d36c9693bc7d0800e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bitcoin/index.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>Actual Bitcoin price</title>
    </head>
    <body>
        <h1>Actual Bitcoin price</h1>
        <h2>USD: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["priceUSD"]) || array_key_exists("priceUSD", $context) ? $context["priceUSD"] : (function () { throw new RuntimeError('Variable "priceUSD" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h2>
        <h2>EUR: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["priceEUR"]) || array_key_exists("priceEUR", $context) ? $context["priceEUR"] : (function () { throw new RuntimeError('Variable "priceEUR" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h2>
        <p>Price update in <span id=\"time\">30</span> seconds</p>

        <script type=\"text/javascript\">
            function countdown() {
                setTimeout(function() {
                    document.getElementById('time').innerHTML -= 1;

                    if(document.getElementById('time').innerHTML < 1) {
                        window.location.reload();
                    }
                    countdown();
                }, 1000);
            }

            countdown();
        </script>
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "bitcoin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <title>Actual Bitcoin price</title>
    </head>
    <body>
        <h1>Actual Bitcoin price</h1>
        <h2>USD: {{priceUSD}}</h2>
        <h2>EUR: {{priceEUR}}</h2>
        <p>Price update in <span id=\"time\">30</span> seconds</p>

        <script type=\"text/javascript\">
            function countdown() {
                setTimeout(function() {
                    document.getElementById('time').innerHTML -= 1;

                    if(document.getElementById('time').innerHTML < 1) {
                        window.location.reload();
                    }
                    countdown();
                }, 1000);
            }

            countdown();
        </script>
    </body>
</html>", "bitcoin/index.html.twig", "C:\\xampp\\htdocs\\symf\\templates\\bitcoin\\index.html.twig");
    }
}
