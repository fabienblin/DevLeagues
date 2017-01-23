<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_510f967b6f625b00a674ce072e67cfa83bdf872650c18a4f776f22599e0f6cdf extends Twig_Template
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
        $__internal_b843ee717b129f6af58ff544ab999b7833aabb498f885629ede1f4581a6f31c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b843ee717b129f6af58ff544ab999b7833aabb498f885629ede1f4581a6f31c0->enter($__internal_b843ee717b129f6af58ff544ab999b7833aabb498f885629ede1f4581a6f31c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_dfbe58e803a9b7b4af321deff42a60ba6b73bb323df9608799d42a85a68d3e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbe58e803a9b7b4af321deff42a60ba6b73bb323df9608799d42a85a68d3e62->enter($__internal_dfbe58e803a9b7b4af321deff42a60ba6b73bb323df9608799d42a85a68d3e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b843ee717b129f6af58ff544ab999b7833aabb498f885629ede1f4581a6f31c0->leave($__internal_b843ee717b129f6af58ff544ab999b7833aabb498f885629ede1f4581a6f31c0_prof);

        
        $__internal_dfbe58e803a9b7b4af321deff42a60ba6b73bb323df9608799d42a85a68d3e62->leave($__internal_dfbe58e803a9b7b4af321deff42a60ba6b73bb323df9608799d42a85a68d3e62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
