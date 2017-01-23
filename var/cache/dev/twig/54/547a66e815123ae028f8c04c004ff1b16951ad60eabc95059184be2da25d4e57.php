<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_60068926ae544a4b3030e4efe8cede91c05ebec6a33c6e8117d950038b7633dd extends Twig_Template
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
        $__internal_3e53a35f949691f812f41581f2448b7a7715fff3b0048e5555684d1d5a3e53a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e53a35f949691f812f41581f2448b7a7715fff3b0048e5555684d1d5a3e53a4->enter($__internal_3e53a35f949691f812f41581f2448b7a7715fff3b0048e5555684d1d5a3e53a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_781957f85d46a651f95aeecdf74f1b6a8167c4c5d54796a4d4d9fd4831c3d9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781957f85d46a651f95aeecdf74f1b6a8167c4c5d54796a4d4d9fd4831c3d9db->enter($__internal_781957f85d46a651f95aeecdf74f1b6a8167c4c5d54796a4d4d9fd4831c3d9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3e53a35f949691f812f41581f2448b7a7715fff3b0048e5555684d1d5a3e53a4->leave($__internal_3e53a35f949691f812f41581f2448b7a7715fff3b0048e5555684d1d5a3e53a4_prof);

        
        $__internal_781957f85d46a651f95aeecdf74f1b6a8167c4c5d54796a4d4d9fd4831c3d9db->leave($__internal_781957f85d46a651f95aeecdf74f1b6a8167c4c5d54796a4d4d9fd4831c3d9db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
