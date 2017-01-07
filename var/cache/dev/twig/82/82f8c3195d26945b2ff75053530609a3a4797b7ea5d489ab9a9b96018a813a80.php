<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6119a8f47907ae5a12b7a3067f0845bcad2099bf144b00539d296f2ccbc7f937 extends Twig_Template
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
        $__internal_7793cd3fc73e863ca148c0326a306723793a88097c7a43e3d9747dd23ae3917b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7793cd3fc73e863ca148c0326a306723793a88097c7a43e3d9747dd23ae3917b->enter($__internal_7793cd3fc73e863ca148c0326a306723793a88097c7a43e3d9747dd23ae3917b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_523a68c86212d76b1e8827624369f59a66ad21f180f51fcd39f0e3e60e413e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523a68c86212d76b1e8827624369f59a66ad21f180f51fcd39f0e3e60e413e81->enter($__internal_523a68c86212d76b1e8827624369f59a66ad21f180f51fcd39f0e3e60e413e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7793cd3fc73e863ca148c0326a306723793a88097c7a43e3d9747dd23ae3917b->leave($__internal_7793cd3fc73e863ca148c0326a306723793a88097c7a43e3d9747dd23ae3917b_prof);

        
        $__internal_523a68c86212d76b1e8827624369f59a66ad21f180f51fcd39f0e3e60e413e81->leave($__internal_523a68c86212d76b1e8827624369f59a66ad21f180f51fcd39f0e3e60e413e81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
