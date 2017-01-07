<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_24255a0fb3488a7d9bda5d8ffb77ffdea28e0f377615327aad0d923fe63dd84c extends Twig_Template
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
        $__internal_351b85ba29ad5126a416cb474a8f767acca0f0b9e79911c1578ab46877671640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351b85ba29ad5126a416cb474a8f767acca0f0b9e79911c1578ab46877671640->enter($__internal_351b85ba29ad5126a416cb474a8f767acca0f0b9e79911c1578ab46877671640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_fc9f3f09f92b41bee67cd3d9516ec55f2c0e22e9c7a28258e610c808dd043ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9f3f09f92b41bee67cd3d9516ec55f2c0e22e9c7a28258e610c808dd043ae5->enter($__internal_fc9f3f09f92b41bee67cd3d9516ec55f2c0e22e9c7a28258e610c808dd043ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_351b85ba29ad5126a416cb474a8f767acca0f0b9e79911c1578ab46877671640->leave($__internal_351b85ba29ad5126a416cb474a8f767acca0f0b9e79911c1578ab46877671640_prof);

        
        $__internal_fc9f3f09f92b41bee67cd3d9516ec55f2c0e22e9c7a28258e610c808dd043ae5->leave($__internal_fc9f3f09f92b41bee67cd3d9516ec55f2c0e22e9c7a28258e610c808dd043ae5_prof);

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
", "knp_menu_base.html.twig", "/var/www/html/devleagues/github/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
