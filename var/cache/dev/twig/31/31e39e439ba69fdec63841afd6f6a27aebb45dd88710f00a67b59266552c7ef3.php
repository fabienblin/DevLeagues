<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_84aa74f7cd98a87c45b442ddd96b50f3276a89a876b4ee6a24d6ef8437888939 extends Twig_Template
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
        $__internal_1022303568397a251c43eaf96979e79f71df3c10fc7b0ec0e8ade812c7826f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1022303568397a251c43eaf96979e79f71df3c10fc7b0ec0e8ade812c7826f62->enter($__internal_1022303568397a251c43eaf96979e79f71df3c10fc7b0ec0e8ade812c7826f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ca12931d82e16a08da165b0d58960105980eeb8bf68652334a92f6884de304e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca12931d82e16a08da165b0d58960105980eeb8bf68652334a92f6884de304e7->enter($__internal_ca12931d82e16a08da165b0d58960105980eeb8bf68652334a92f6884de304e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1022303568397a251c43eaf96979e79f71df3c10fc7b0ec0e8ade812c7826f62->leave($__internal_1022303568397a251c43eaf96979e79f71df3c10fc7b0ec0e8ade812c7826f62_prof);

        
        $__internal_ca12931d82e16a08da165b0d58960105980eeb8bf68652334a92f6884de304e7->leave($__internal_ca12931d82e16a08da165b0d58960105980eeb8bf68652334a92f6884de304e7_prof);

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
", "@Framework/Form/percent_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
