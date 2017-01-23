<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_528706d2ed179fc4f2c0ba9bf61c205a65f57b0333b35bd9cf251b5949a47e83 extends Twig_Template
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
        $__internal_b0c11eb86d2b6b2ea3a1763b479cfac743fcb170da2afacfa61249e2fa38834c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c11eb86d2b6b2ea3a1763b479cfac743fcb170da2afacfa61249e2fa38834c->enter($__internal_b0c11eb86d2b6b2ea3a1763b479cfac743fcb170da2afacfa61249e2fa38834c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_81f5826bbb1051b004c1b54762cc0a822bb992040af5c81f5fe13747052e6459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f5826bbb1051b004c1b54762cc0a822bb992040af5c81f5fe13747052e6459->enter($__internal_81f5826bbb1051b004c1b54762cc0a822bb992040af5c81f5fe13747052e6459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b0c11eb86d2b6b2ea3a1763b479cfac743fcb170da2afacfa61249e2fa38834c->leave($__internal_b0c11eb86d2b6b2ea3a1763b479cfac743fcb170da2afacfa61249e2fa38834c_prof);

        
        $__internal_81f5826bbb1051b004c1b54762cc0a822bb992040af5c81f5fe13747052e6459->leave($__internal_81f5826bbb1051b004c1b54762cc0a822bb992040af5c81f5fe13747052e6459_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
