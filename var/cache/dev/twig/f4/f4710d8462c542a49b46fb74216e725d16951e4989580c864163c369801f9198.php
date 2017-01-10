<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f1423e4aea18c04b01487c8ef2669dfcf0589665c9d2f82b0913d35c456b469a extends Twig_Template
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
        $__internal_839190c7c32b1794452453fd9e32c5bd0561bf5f38b2f49e0163959f185458e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839190c7c32b1794452453fd9e32c5bd0561bf5f38b2f49e0163959f185458e5->enter($__internal_839190c7c32b1794452453fd9e32c5bd0561bf5f38b2f49e0163959f185458e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_795c7b4e7faf7e51eb0f253cc060121c5268a23181e385b96dfcc8c21d5eba95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795c7b4e7faf7e51eb0f253cc060121c5268a23181e385b96dfcc8c21d5eba95->enter($__internal_795c7b4e7faf7e51eb0f253cc060121c5268a23181e385b96dfcc8c21d5eba95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_839190c7c32b1794452453fd9e32c5bd0561bf5f38b2f49e0163959f185458e5->leave($__internal_839190c7c32b1794452453fd9e32c5bd0561bf5f38b2f49e0163959f185458e5_prof);

        
        $__internal_795c7b4e7faf7e51eb0f253cc060121c5268a23181e385b96dfcc8c21d5eba95->leave($__internal_795c7b4e7faf7e51eb0f253cc060121c5268a23181e385b96dfcc8c21d5eba95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
