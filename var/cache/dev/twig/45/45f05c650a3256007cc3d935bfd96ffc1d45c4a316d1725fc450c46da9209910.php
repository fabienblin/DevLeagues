<?php

/* @DevLeagues/User/index.html.twig */
class __TwigTemplate_5a9d9b3414f0fe0c37b0e334f3eac58cb47e83047163896520b10d13b2c81651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/User/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f0b119e0d71577ff894e698fbdaad86cb98b73f5cbec4f8b2c8391a81b94837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0b119e0d71577ff894e698fbdaad86cb98b73f5cbec4f8b2c8391a81b94837->enter($__internal_2f0b119e0d71577ff894e698fbdaad86cb98b73f5cbec4f8b2c8391a81b94837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/User/index.html.twig"));

        $__internal_77300cdef0ed4b9a18254b34d54426b244e988fa3fc4815e7597529a174b84fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77300cdef0ed4b9a18254b34d54426b244e988fa3fc4815e7597529a174b84fa->enter($__internal_77300cdef0ed4b9a18254b34d54426b244e988fa3fc4815e7597529a174b84fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/User/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0b119e0d71577ff894e698fbdaad86cb98b73f5cbec4f8b2c8391a81b94837->leave($__internal_2f0b119e0d71577ff894e698fbdaad86cb98b73f5cbec4f8b2c8391a81b94837_prof);

        
        $__internal_77300cdef0ed4b9a18254b34d54426b244e988fa3fc4815e7597529a174b84fa->leave($__internal_77300cdef0ed4b9a18254b34d54426b244e988fa3fc4815e7597529a174b84fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc3c88fe2ee8e8c193a44c2f1cf79bec8968a95be90a7af68a400b476144bd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3c88fe2ee8e8c193a44c2f1cf79bec8968a95be90a7af68a400b476144bd35->enter($__internal_dc3c88fe2ee8e8c193a44c2f1cf79bec8968a95be90a7af68a400b476144bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c47dd07bb0686d391a8eefd62a57f147d350b9bfa0e79d0f7facd4b154dfd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c47dd07bb0686d391a8eefd62a57f147d350b9bfa0e79d0f7facd4b154dfd02->enter($__internal_6c47dd07bb0686d391a8eefd62a57f147d350b9bfa0e79d0f7facd4b154dfd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the User:index page</h1>
";
        
        $__internal_6c47dd07bb0686d391a8eefd62a57f147d350b9bfa0e79d0f7facd4b154dfd02->leave($__internal_6c47dd07bb0686d391a8eefd62a57f147d350b9bfa0e79d0f7facd4b154dfd02_prof);

        
        $__internal_dc3c88fe2ee8e8c193a44c2f1cf79bec8968a95be90a7af68a400b476144bd35->leave($__internal_dc3c88fe2ee8e8c193a44c2f1cf79bec8968a95be90a7af68a400b476144bd35_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/User/index.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}
<h1>Welcome to the User:index page</h1>
{% endblock %}
", "@DevLeagues/User/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/User/index.html.twig");
    }
}
