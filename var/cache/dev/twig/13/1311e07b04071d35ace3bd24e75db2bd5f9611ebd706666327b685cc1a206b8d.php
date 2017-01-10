<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8f05530502145d32bbc654012114e9f7526a08605403c913d9e645e4be23f639 extends Twig_Template
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
        $__internal_c28f438a5679b543fa4a44c68ac55feabf432fd15abb50104dd5caf76af82cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28f438a5679b543fa4a44c68ac55feabf432fd15abb50104dd5caf76af82cbb->enter($__internal_c28f438a5679b543fa4a44c68ac55feabf432fd15abb50104dd5caf76af82cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_21ce3154e24d40719101d741a63ae66a4b624fcfb6794558cf4842ca1793c0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ce3154e24d40719101d741a63ae66a4b624fcfb6794558cf4842ca1793c0ad->enter($__internal_21ce3154e24d40719101d741a63ae66a4b624fcfb6794558cf4842ca1793c0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c28f438a5679b543fa4a44c68ac55feabf432fd15abb50104dd5caf76af82cbb->leave($__internal_c28f438a5679b543fa4a44c68ac55feabf432fd15abb50104dd5caf76af82cbb_prof);

        
        $__internal_21ce3154e24d40719101d741a63ae66a4b624fcfb6794558cf4842ca1793c0ad->leave($__internal_21ce3154e24d40719101d741a63ae66a4b624fcfb6794558cf4842ca1793c0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
