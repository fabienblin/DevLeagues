<?php

/* ::base.html.twig */
class __TwigTemplate_7b46f047508007606db58e49dc4a304ce709d985b7ec60373dc59138c930a853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc8d91fb4d3b555df7b6f8217dd18170ca1ad1c601859c13b6278ff86c49d9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8d91fb4d3b555df7b6f8217dd18170ca1ad1c601859c13b6278ff86c49d9d4->enter($__internal_cc8d91fb4d3b555df7b6f8217dd18170ca1ad1c601859c13b6278ff86c49d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cc8d91fb4d3b555df7b6f8217dd18170ca1ad1c601859c13b6278ff86c49d9d4->leave($__internal_cc8d91fb4d3b555df7b6f8217dd18170ca1ad1c601859c13b6278ff86c49d9d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e72af119a1b1b346dc6618c7db178cfdf8e55de368da7a5dc65aa78343b7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e72af119a1b1b346dc6618c7db178cfdf8e55de368da7a5dc65aa78343b7a3->enter($__internal_f2e72af119a1b1b346dc6618c7db178cfdf8e55de368da7a5dc65aa78343b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2e72af119a1b1b346dc6618c7db178cfdf8e55de368da7a5dc65aa78343b7a3->leave($__internal_f2e72af119a1b1b346dc6618c7db178cfdf8e55de368da7a5dc65aa78343b7a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0ddfe2767d2d892b74cd4e7b440291984fe24617c0081980dfbc076a99eeefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ddfe2767d2d892b74cd4e7b440291984fe24617c0081980dfbc076a99eeefa->enter($__internal_e0ddfe2767d2d892b74cd4e7b440291984fe24617c0081980dfbc076a99eeefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0ddfe2767d2d892b74cd4e7b440291984fe24617c0081980dfbc076a99eeefa->leave($__internal_e0ddfe2767d2d892b74cd4e7b440291984fe24617c0081980dfbc076a99eeefa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_deed645d66ecfcffb2bd5ca5d23048db9911df09319ae87218f8a33e0622f62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deed645d66ecfcffb2bd5ca5d23048db9911df09319ae87218f8a33e0622f62b->enter($__internal_deed645d66ecfcffb2bd5ca5d23048db9911df09319ae87218f8a33e0622f62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_deed645d66ecfcffb2bd5ca5d23048db9911df09319ae87218f8a33e0622f62b->leave($__internal_deed645d66ecfcffb2bd5ca5d23048db9911df09319ae87218f8a33e0622f62b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_936ae3c12b29b2929d42780b20e2236c65cd9ac675f299fb961e44ee51a76fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936ae3c12b29b2929d42780b20e2236c65cd9ac675f299fb961e44ee51a76fbf->enter($__internal_936ae3c12b29b2929d42780b20e2236c65cd9ac675f299fb961e44ee51a76fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_936ae3c12b29b2929d42780b20e2236c65cd9ac675f299fb961e44ee51a76fbf->leave($__internal_936ae3c12b29b2929d42780b20e2236c65cd9ac675f299fb961e44ee51a76fbf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/devleagues/app/Resources/views/base.html.twig");
    }
}
