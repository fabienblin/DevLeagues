<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1c16ce90d8b8e5be534bfc8597c53b06a8713eb964580a133ff5a97e2992a159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2558c43102cf13e8c46c24e4776fc5f7770bdbe28dd79d47e30797f9a94b3c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2558c43102cf13e8c46c24e4776fc5f7770bdbe28dd79d47e30797f9a94b3c28->enter($__internal_2558c43102cf13e8c46c24e4776fc5f7770bdbe28dd79d47e30797f9a94b3c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_f779c923ae13cf0696e992ab7bf622fe1aa5457b911ec580bce34f48d7872d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f779c923ae13cf0696e992ab7bf622fe1aa5457b911ec580bce34f48d7872d79->enter($__internal_f779c923ae13cf0696e992ab7bf622fe1aa5457b911ec580bce34f48d7872d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2558c43102cf13e8c46c24e4776fc5f7770bdbe28dd79d47e30797f9a94b3c28->leave($__internal_2558c43102cf13e8c46c24e4776fc5f7770bdbe28dd79d47e30797f9a94b3c28_prof);

        
        $__internal_f779c923ae13cf0696e992ab7bf622fe1aa5457b911ec580bce34f48d7872d79->leave($__internal_f779c923ae13cf0696e992ab7bf622fe1aa5457b911ec580bce34f48d7872d79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d57da772c9a014bd42799cb67aefd47039388c864758962f5876838e4806355b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57da772c9a014bd42799cb67aefd47039388c864758962f5876838e4806355b->enter($__internal_d57da772c9a014bd42799cb67aefd47039388c864758962f5876838e4806355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51040e89f178b516faa8baa46518c015d2370c261376b18bc409c45d319f67c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51040e89f178b516faa8baa46518c015d2370c261376b18bc409c45d319f67c1->enter($__internal_51040e89f178b516faa8baa46518c015d2370c261376b18bc409c45d319f67c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_51040e89f178b516faa8baa46518c015d2370c261376b18bc409c45d319f67c1->leave($__internal_51040e89f178b516faa8baa46518c015d2370c261376b18bc409c45d319f67c1_prof);

        
        $__internal_d57da772c9a014bd42799cb67aefd47039388c864758962f5876838e4806355b->leave($__internal_d57da772c9a014bd42799cb67aefd47039388c864758962f5876838e4806355b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
