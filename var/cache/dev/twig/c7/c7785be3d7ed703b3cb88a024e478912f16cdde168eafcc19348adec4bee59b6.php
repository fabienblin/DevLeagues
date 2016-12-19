<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0288ba8e3ef9b9ca85b0ee8bde67f0411d4b5cdd26a2814c4a6729e62b205d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a121cc1fb057534e2b40e41f3dd2423b51bf9a0a3d4529e008301a737f124874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a121cc1fb057534e2b40e41f3dd2423b51bf9a0a3d4529e008301a737f124874->enter($__internal_a121cc1fb057534e2b40e41f3dd2423b51bf9a0a3d4529e008301a737f124874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a121cc1fb057534e2b40e41f3dd2423b51bf9a0a3d4529e008301a737f124874->leave($__internal_a121cc1fb057534e2b40e41f3dd2423b51bf9a0a3d4529e008301a737f124874_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93dec647dc2ff48ab948066ae3ab5bc1caaac26df5fa4c0e1123f019afde06f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dec647dc2ff48ab948066ae3ab5bc1caaac26df5fa4c0e1123f019afde06f8->enter($__internal_93dec647dc2ff48ab948066ae3ab5bc1caaac26df5fa4c0e1123f019afde06f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_93dec647dc2ff48ab948066ae3ab5bc1caaac26df5fa4c0e1123f019afde06f8->leave($__internal_93dec647dc2ff48ab948066ae3ab5bc1caaac26df5fa4c0e1123f019afde06f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
