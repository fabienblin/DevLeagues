<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_180c56280d4b79042ddf5d419efc4b42ac573875af7053b213c248da7c909445 extends Twig_Template
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
        $__internal_baa288027a1bac591b09f82632a3d6cbe295940bad9398889f361aedceeaf4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa288027a1bac591b09f82632a3d6cbe295940bad9398889f361aedceeaf4fe->enter($__internal_baa288027a1bac591b09f82632a3d6cbe295940bad9398889f361aedceeaf4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8b382e7b828a35aa156e3448d2ff790ecc7a1a230161046153ff89134a89bae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b382e7b828a35aa156e3448d2ff790ecc7a1a230161046153ff89134a89bae3->enter($__internal_8b382e7b828a35aa156e3448d2ff790ecc7a1a230161046153ff89134a89bae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_baa288027a1bac591b09f82632a3d6cbe295940bad9398889f361aedceeaf4fe->leave($__internal_baa288027a1bac591b09f82632a3d6cbe295940bad9398889f361aedceeaf4fe_prof);

        
        $__internal_8b382e7b828a35aa156e3448d2ff790ecc7a1a230161046153ff89134a89bae3->leave($__internal_8b382e7b828a35aa156e3448d2ff790ecc7a1a230161046153ff89134a89bae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
