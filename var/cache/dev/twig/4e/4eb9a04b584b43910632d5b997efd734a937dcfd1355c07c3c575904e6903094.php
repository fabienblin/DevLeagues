<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6b509f5c6bdfb7923b8fdd12bbac0b34099f32252bc853e71cd842f88350a8c8 extends Twig_Template
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
        $__internal_fd26562b0e653caabe168e8336648aea34e7069b441d24e232240ba14f37eee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd26562b0e653caabe168e8336648aea34e7069b441d24e232240ba14f37eee6->enter($__internal_fd26562b0e653caabe168e8336648aea34e7069b441d24e232240ba14f37eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_2255b82444cada3ba0e56b5c997d4d70c69b6e5c47e288d92163aeaa9970955b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2255b82444cada3ba0e56b5c997d4d70c69b6e5c47e288d92163aeaa9970955b->enter($__internal_2255b82444cada3ba0e56b5c997d4d70c69b6e5c47e288d92163aeaa9970955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_fd26562b0e653caabe168e8336648aea34e7069b441d24e232240ba14f37eee6->leave($__internal_fd26562b0e653caabe168e8336648aea34e7069b441d24e232240ba14f37eee6_prof);

        
        $__internal_2255b82444cada3ba0e56b5c997d4d70c69b6e5c47e288d92163aeaa9970955b->leave($__internal_2255b82444cada3ba0e56b5c997d4d70c69b6e5c47e288d92163aeaa9970955b_prof);

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
