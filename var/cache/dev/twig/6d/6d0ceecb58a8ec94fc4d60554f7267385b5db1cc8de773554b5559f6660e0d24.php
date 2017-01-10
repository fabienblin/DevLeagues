<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a403eac29e436e550a6e5398af95f0dacb56f0e448b0041c6f266540657ba392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f985bd128cc35aa5fddc7e14e70f7e58c663321d3ea84cae1a4ba3e4cd2b687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f985bd128cc35aa5fddc7e14e70f7e58c663321d3ea84cae1a4ba3e4cd2b687->enter($__internal_5f985bd128cc35aa5fddc7e14e70f7e58c663321d3ea84cae1a4ba3e4cd2b687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_29032856e7e9e06801733ebb6e49866880d548ca8ce11bfe8986041050de32ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29032856e7e9e06801733ebb6e49866880d548ca8ce11bfe8986041050de32ef->enter($__internal_29032856e7e9e06801733ebb6e49866880d548ca8ce11bfe8986041050de32ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_5f985bd128cc35aa5fddc7e14e70f7e58c663321d3ea84cae1a4ba3e4cd2b687->leave($__internal_5f985bd128cc35aa5fddc7e14e70f7e58c663321d3ea84cae1a4ba3e4cd2b687_prof);

        
        $__internal_29032856e7e9e06801733ebb6e49866880d548ca8ce11bfe8986041050de32ef->leave($__internal_29032856e7e9e06801733ebb6e49866880d548ca8ce11bfe8986041050de32ef_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
