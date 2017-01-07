<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0cb1193536f1afc9a73309e8851d8ba39e8592f91fb4f03065dfdbafd41f2e6d extends Twig_Template
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
        $__internal_c2f7242687f3100ed2967bafd4d313cb79e0e7c87ccbe2c08279fef1b0989855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f7242687f3100ed2967bafd4d313cb79e0e7c87ccbe2c08279fef1b0989855->enter($__internal_c2f7242687f3100ed2967bafd4d313cb79e0e7c87ccbe2c08279fef1b0989855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_81d9b3523c39744a475ea5b4dae857ce7da029cf171c804bf6fc236bc2c628c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d9b3523c39744a475ea5b4dae857ce7da029cf171c804bf6fc236bc2c628c5->enter($__internal_81d9b3523c39744a475ea5b4dae857ce7da029cf171c804bf6fc236bc2c628c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c2f7242687f3100ed2967bafd4d313cb79e0e7c87ccbe2c08279fef1b0989855->leave($__internal_c2f7242687f3100ed2967bafd4d313cb79e0e7c87ccbe2c08279fef1b0989855_prof);

        
        $__internal_81d9b3523c39744a475ea5b4dae857ce7da029cf171c804bf6fc236bc2c628c5->leave($__internal_81d9b3523c39744a475ea5b4dae857ce7da029cf171c804bf6fc236bc2c628c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
