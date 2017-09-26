<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5a9aed02b93250ded06bc5e9e0cdadf24e1c2e0dd054b82b300c2afdd1bc5186 extends Twig_Template
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
        $__internal_7cf3b6afe73bad63ec403f3832f7fd5359c8f48ecc85c379db37d6d129496571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf3b6afe73bad63ec403f3832f7fd5359c8f48ecc85c379db37d6d129496571->enter($__internal_7cf3b6afe73bad63ec403f3832f7fd5359c8f48ecc85c379db37d6d129496571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_78f19fe66d55af67805bd4e26a6b90609e10cbd48a605503277ef76821772eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f19fe66d55af67805bd4e26a6b90609e10cbd48a605503277ef76821772eef->enter($__internal_78f19fe66d55af67805bd4e26a6b90609e10cbd48a605503277ef76821772eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7cf3b6afe73bad63ec403f3832f7fd5359c8f48ecc85c379db37d6d129496571->leave($__internal_7cf3b6afe73bad63ec403f3832f7fd5359c8f48ecc85c379db37d6d129496571_prof);

        
        $__internal_78f19fe66d55af67805bd4e26a6b90609e10cbd48a605503277ef76821772eef->leave($__internal_78f19fe66d55af67805bd4e26a6b90609e10cbd48a605503277ef76821772eef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
